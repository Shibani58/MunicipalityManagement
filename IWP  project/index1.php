<?php
$munname=@$_POST['munname'];
$zone=@$_POST['zone'];
$district=@$_POST['district'];
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


 $sql2="SELECT munname from munci_details where munname='$munname' ";
 $data2=mysqli_query($conn,$sql2);
 

 $result=mysqli_num_rows($data2);
 
 if($result==0)
 {
    $sql="INSERT INTO munci_details  (munname,zone,district) values('$munname','$zone','$district') ";

    $data=mysqli_query($conn, $sql);
 

 if($data)
 {
    $message = "DATA ENTERED SUCCESFULLY AND NOW FILL THE FORM FOR CITIZEN";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("refresh:0;url=citizen.html");
    
 }
 

 
 }

else{
    $message = "You can visit the Citizen details form";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("refresh:0;url=citizen.html");

}
}
?>