<?php
session_start();
$host="hera.office.goodtimehobbies.com";
$port=3306;
$socket="";
$user="marketing";
$password="";
$dbname="amainhobbies_store";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();



$query1 = "SELECT n.brand_id, title, c.categories_name AS interest, ecg.name AS capture_group,
 total_delivered, opens,
 clicks,
 complaints,
 unsubscribes,
 campaign FROM
 newsletters n
     LEFT JOIN
     email_captures_groups ecg USING (email_captures_groups_id)
         LEFT JOIN
         categories_description c ON (c.categories_id = n.top_level_categories_id)";

$res = mysqli_query($con,$query1) or exit( mysqli_error($con) );
print_r($res);

/*if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($brand_id, $title, $interest, $capture_group, $total_delivered, $opens, $clicks, $complaints, $unsubscribes, $campaign);
    while ($stmt->fetch()) {
  echo $brand_id, $title, $interest, $capture_group, $total_delivered, $opens, $clicks, $complaints, $unsubscribes, $campaign;
    }
}
print_r($stmt);
//printf("%s, %s, %s, %s, %s, %s, %s, %s, %s, %s\n", $brand_id, $title, $interest, $capture_group, $total_delivered, $opens, $clicks, $complaints, $unsubscribes, $campaign);
*/

 ?>
