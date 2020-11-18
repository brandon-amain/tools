const selectOne = document.getElementById('selectorOne');
//get the div for the second drop down
const selectTwo = document.getElementById('selectorTwo');
//get the div for the third drop down
const selectThree = document.getElementById('selectorThree');
let upperHeadset = '<select onchange="mainSelect()" id="upper-type"><option value="" selected disabled hidden>Choose here</option>';

for (let i = 0; i < upper.length; i++){
  upperHeadset += '<option>' + upper[i].type + '</option>';
}

upperHeadset += '</select>';

selectOne.innerHTML = upperHeadset;

//begin building HTML to put in the div for the third drop down
let fork = '<select id="upper-fork"><option value="" selected disabled hidden>Choose here</option>';

//build second drop down
function mainSelect() {
  //begin building HTML to put in the div for the second drop down
  let frameHTML = '<select onchange="secondSelect()" id="upper-frame"><option value="" selected disabled hidden>Choose here</option>';
  let topFrame = [];

  //grab the value from the first drop down & take data from first drop down and build html for second drop down options
  var select2 = document.getElementById('upper-type');
  var text2 = select2.options[select2.selectedIndex].text;

  for (let i = 0; i < upper.length; i++) {
    if (upper[i].type == text2) {
      topFrame.push(upper[i].frame);
    }
  }

  //remove duplicates from array for cleanliness
  topFrame = topFrame.filter( function( item, index, inputArray ) {
           return inputArray.indexOf(item) == index;
    });

  //build second drop down of frame size
  for (let y = 0; y < topFrame.length; y++) {
    frameHTML += '<option>' + topFrame[y] + '</option>';
  }

  //end select HTML build
  selectorTwo.innerHTML = frameHTML + '</select>';
}


function secondSelect() {
  var select = document.getElementById('upper-frame');
  var text = select.options[select.selectedIndex].text;
  for (let i = 0; i < upper.length; i++) {
    if (upper[i].frame == text) {
      fork += '<option>' + upper[i].fork + '</option>';
    }
  }
  selectorThree.innerHTML = fork + '</select>';
}
