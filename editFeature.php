<?php
$id =   htmlspecialchars($_GET["id"])  ;
include "con.php";

$q = "UPDATE gnis SET FeatureName='a name', Lat=34, Lon=-89, EleFt=40  WHERE FeatureID=" . $id;

$sqlDelete = mysqli_query($con,$q);

if(!$sqlDelete){
  echo ('could not update data');
  
}

echo ('Updated Successfully!');
mysqli_close($con);
?>