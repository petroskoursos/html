<?php
$conn = new mysqli("localhost","ds19138","202183191","ds19138");



   
if(!empty($_POST['login']))
{
    $username=$_POST['name'];
    
    $password=$_POST['password'];
    
    $query =" select * from login where username ='$username' and password='$password' ";
    
    $result=mysqli_query($conn,$query);
    
    $count= mysqli_num_rows($result);
    
    if($count>0)
    {
        
        print "welcome $_REQUEST[name] ";
        session_start();
        $_SESSION['name']=$_POST['name'];
        print "<a href=\"welcome.php\">goto next page</a>";
        
    }
    else
    {
        echo"failed";
    }
    
}
   ?>