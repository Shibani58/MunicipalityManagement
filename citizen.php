<?php
$firstname=@$_POST['firstname'];
$middlename=@$_POST['middlename'];
$lastname=@$_POST['lastname'];
$dob=@$_POST['dob'];
$birthid=@$_POST['birthid'];
$citizenid=@$_POST['citizenid'];
$gender=@$_POST['gender'];
$phonenumber=@$_POST['phonenumber'];
$housenumber=@$_POST['housenumber'];
$wardnumber=@$_POST['wardnumber'];
$maritialstatus=@$_POST['maritialstatus'];
$muncipalityname="Rajbiraj";
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
$c=0;


   
     if (!preg_match("/^[a-zA-Z]*$/",$firstname)) {
     
        echo "<p><font color=red> <b>Please,enter the valid first name</b></font></p>";
        $c=1;
        
    }
    
    if (!preg_match("/^[a-zA-Z]*$/",$middlename)) {
                                                 
        echo "<p><font color=red> <b>Please,enter the valid middle name</b></font></p>";
        $c=1;
        
    }
    if (!preg_match("/^[a-zA-Z]*$/",$lastname)) {
                                                 
        echo "<p><font color=red> <b>Please,enter the valid last name</b></font></p>";
        $c=1;
        
    }
    if (!preg_match("/^[0-9]*$/",$birthid)) {
                                               
        echo "<p><font color=red> <b>Please,enter the valid birthid</b></font></p>";
        $c=1;
        
    }
    if (!preg_match("/^[0-9]{2}+-+[0-9]{2}+-+[0-9]{2}+-+[0-9]*$/",$citizenid)) {
                                               
        echo "<p><font color=red> <b>Please,enter the valid citizenid </b></font></p>";
        $c=1;
        
    }
    
    if (!preg_match("/^[1-9]{1}+[0-9]{9}$/",$phonenumber)) {
        echo "<p><font color=red> <b>Enter the valid phonenumber</b></font></p>";
       $c=1;
       
   }

   

   
  
   if (date("Y-m-d") < $dob ) {
    echo "<p><font color=red> <b>Enter the valid Date of Birth</b></font></p>";
    $c=1;
       }

     


        
       if($c==0)
       {
$sql="INSERT INTO  citizen (dob,birthid,citizenid,gender,phonenumber,wardnumber,housenumber,maritialstatus,muncipalityname,firstname,middlename,lastname ) values('$dob','$birthid','$citizenid','$gender','$phonenumber',$wardnumber,'$housenumber','$maritialstatus','$muncipalityname','$firstname','$middlename','$lastname') ";
$data=mysqli_query($conn,$sql);

if($data)
{

    $message = "DATA ENTERED SUCCESFULLY ";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("refresh:0;url=citizen.html");
}
else{

    echo "Cant do query"."<br>";
    echo "Please, Enter the recognized value ";


}

       }
}


?>