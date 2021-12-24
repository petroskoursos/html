<?php
  $email=$_POST['email'];
 $password=$_POST['password'];

$con = new mysqli("localhost","ds19138","","test");
if($con->connect_error)
{
    die("failed to connect :".$con->connect_error);
}
else
{
    $stmt=$con->prepare("select *from registration where email=?");
    $stmt->blind_param("s",$email);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows>0)
    {
        $data =$stmt_result->fetch_assoc();
        if($data['password']==$password)
        {
            echo "<h2>login successfully</h2>";
        }
        else
        {
            echo"<h2>wrong</h2>";
        }
    }
    else
    {
        echo "<h2>INvalid email or password</h2>";
    }
    
    
}
?>