<?php
$username=$_POST['username'];
$password=$_POST['password'];
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="muncipality";
$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);


if(!$conn)
{
    echo "Server is not connected";

}

if(isset($_POST["submit"]))
{

$sql="SELECT username,password from  administration_login";

 $data=mysqli_query($conn, $sql);
 
 $result=mysqli_fetch_assoc($data);
 $total=mysqli_num_rows($data);

if($total>0)
{
  
  $hashed=hash('sha512',$password);

if($result["username"]==$username && $result["password"]==$hashed)
{

header("refresh:0;url=indexht.php");

}
else{
    $message = "Username and/or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
    header("refresh:0;url=Administration_Login.html");

}
}
}



?>