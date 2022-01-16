<?php


$q = intval($_GET['q']);

$con = new mysqli("localhost","ds19138","202183191","ds19138");

if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ds19138");

$sql="SELECT * FROM ougiaroglou WHERE id = '".$q."'";
   // $sql="SELECT * FROM MyGuests WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_assoc($result)) {
 
  echo "<p>" . $row['firstname'] . "</p>";
  echo "<p>" . $row['anakoinwsh'] . "</p>";
  
  
}
echo "</table>";
$sql="SELECT * FROM MyGeussts WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_assoc($result)) {
 
  echo "<p>" . $row['firstname'] . "</p>";
  echo "<p>" . $row['anakoinwsh'] . "</p>";
  
  
}
echo "</table>";
mysqli_close($con);
?>