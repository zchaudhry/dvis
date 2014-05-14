<?php
$id =   htmlspecialchars($_GET["id"])  ;
include "con.php";

$q = "DELETE FROM gnis WHERE FeatureID=" . $id;

$sqlDelete = mysqli_query($con,$q);

if(!$sqlDelete){
  echo ('could not delete data');
  
}

echo ('Deleted Successfully!');
mysqli_close($con);
?>