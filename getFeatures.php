<?php
include "con.php";

$result = mysqli_query($con,"SELECT * FROM gnis");
$xml = new SimpleXMLElement('<xml/>');
while($row = mysqli_fetch_array($result))
  {
  $user = $xml->addChild('point');
    $user->addChild('FID', $row['FeatureID']);
  $user->addChild('FName', $row['FeatureName']);
  $user->addChild('Lat', $row['Lat']);
  $user->addChild('Long', $row['Lon']);
  $user->addChild('Elev', $row['EleFt']);
  }
Header('Content-type: text/xml');
print($xml->asXML());
mysqli_close($con);
?>




