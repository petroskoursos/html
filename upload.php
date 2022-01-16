<?php
session_start();
$conn = new mysqli("localhost","ds19138","202183191","ds19138");

$text=$_POST['text'];
$firstname=$_SESSION['name'];

if("ougiaroglou"==$_SESSION['name'])
{
    $id='2'
}
else if("papadhmhtriou"==$_SESSION['name'])
{
    $id='1';
}

$sql="INSERT INTO MyGuests (id,firstname,anakoinwsh)
VALUES('$id','$firstname','$text')";

if ($conn->query($sql) === TRUE) 
{
  echo "New record created successfully";
} 
else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>