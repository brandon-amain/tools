<?php
$pageTitle = "6 Product";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="../assets/img/logo2.png" />

                    </a>
                    
                </div>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="../index.html" ><i class="fa fa-desktop "></i>Email Builder</a>
                    </li>        
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="../newproduct/newproduct.php">New Product</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?php echo $pageTitle ?></li>
                </ol>
              </nav>
                <div class="row">
                    <div class="col-lg-12">
                     <h2><i class="fa fa-folder-open-o fa-2x"></i> New Product Email Builder</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <div class="row">
                    <div class="col-lg-4 col-md-4">
                    <form action="six-product-result.php" method="post">
                        <div class="form-group">
                            <h3>Product 1</h3>
                            <label>Product Title</label>
                            <input class="form-control" name="title1" maxlength="58" />
                            <label>Product Image</label>
                            <input class="form-control" name="image1" />    
                            <label>Product Link</label>
                            <input class="form-control" name="link1" />      
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <h3>Product 2</h3>
                            <label>Product Title</label>
                            <input class="form-control" name="title2" maxlength="58" />
                            <label>Product Image</label>
                            <input class="form-control" name="image2" />    
                            <label>Product Link</label>
                            <input class="form-control" name="link2" />      
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <h3>Product 3</h3>
                            <label>Product Title</label>
                            <input class="form-control" name="title3" maxlength="58" />
                            <label>Product Image</label>
                            <input class="form-control" name="image3" />    
                            <label>Product Link</label>
                            <input class="form-control" name="link3" />      
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <h3>Product 4</h3>
                            <label>Product Title</label>
                            <input class="form-control" name="title4" maxlength="58" />
                            <label>Product Image</label>
                            <input class="form-control" name="image4" />    
                            <label>Product Link</label>
                            <input class="form-control" name="link4" />      
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <h3>Product 5</h3>
                            <label>Product Title</label>
                            <input class="form-control" name="title5" maxlength="58" />
                            <label>Product Image</label>
                            <input class="form-control" name="image5" />    
                            <label>Product Link</label>
                            <input class="form-control" name="link5" />      
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <h3>Product 6</h3>
                            <label>Product Title</label>
                            <input class="form-control" name="title6" maxlength="58" />
                            <label>Product Image</label>
                            <input class="form-control" name="image6" />    
                            <label>Product Link</label>
                            <input class="form-control" name="link6" />      
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <h3>All New</h3>
                            <label>Link to All New</label> 
                            <input class="form-control" name="allnew" />      
                        </div>
                    </div>

                </div>
                 <div class="col-lg-4 col-md-4">
                        <input type="submit" class="btn btn-primary btn-lg btn-block">
                  </div>
                </form>

                 <!-- /. ROW  -->   
				  <div class="row">
                    <div class="col-lg-12 ">
					<br/>
                        <div class="alert alert-danger">
                             <strong>Want to build a new style email?</strong> Let Me know <a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icons/">Click Here</a>.
                        </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  2018 brandonaldred.com/amainemailbuilder | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.brandonaldred.com</a>
                </div>
            </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
    
   
</body>
</html>
