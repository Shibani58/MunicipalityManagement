<!DOCTYPE html>
<html>
    <head>
        <style>
                p.one {
                    background-color: lightgrey;
  width: 500px;
  height: 50px;
  border: 2px solid green;
  padding: 5px;
  margin: 5px;
                }
                </style>
                </head>
   

                <head>
                        <style>
                        body {
                          background-image: url("images/indexback.jpg");
                        }
                        </style>
                        </head>

<div>
<head>
                        <style>
                                body {font-family: Arial, Helvetica, sans-serif;}
                                
                                /* Full-width input fields */
                                input[type=text], input[type=password] {
                                  width: 100%;
                                  padding: 12px 20px;
                                  margin: 8px 0;
                                  display: inline-block;
                                  border: 1px solid #ccc;
                                  box-sizing: border-box;
                                }
                                
                                /* Set a style for all buttons */
                                button {
                                  background-color: #4CAF50;
                                  color: white;
                                  padding: 14px 20px;
                                  margin: 8px 0;
                                  border: none;
                                  cursor: pointer;
                                  width: 20%;
                                }
                                
                                button:hover {
                                  opacity: 0.8;
                                }
                                
                                /* Extra styles for the cancel button */
                                .cancelbtn {
                                  width: auto;
                                  padding: 10px 18px;
                                  background-color: #f44336;
                                }
                                
                                /* Center the image and position the close button */
                                .imgcontainer {
                                  text-align: center;
                                  margin: 24px 0 12px 0;
                                  position: relative;
                                }
                                
                                img.avatar {
                                  width: 40%;
                                  border-radius: 50%;
                                }
                                
                                .container {
                                  padding: 16px;
                                }
                                
                                span.psw {
                                  float: right;
                                  padding-top: 16px;
                                }
                                
                                /* The Modal (background) */
                                .modal {
                                  display: none; /* Hidden by default */
                                  position: fixed; /* Stay in place */
                                  z-index: 1; /* Sit on top */
                                  left: 0;
                                  top: 0;
                                  width: 100%; /* Full width */
                                  height: 100%; /* Full height */
                                  overflow: auto; /* Enable scroll if needed */
                                  background-color: rgb(0,0,0); /* Fallback color */
                                  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                                  padding-top: 60px;
                                }
                                
                                /* Modal Content/Box */
                                .modal-content {
                                  background-color: #fefefe;
                                  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                                  border: 1px solid #888;
                                  width: 80%; /* Could be more or less, depending on screen size */
                                }
                                
                                /* The Close Button (x) */
                                .close {
                                  position: absolute;
                                  right: 25px;
                                  top: 0;
                                  color: #000;
                                  font-size: 35px;
                                  font-weight: bold;
                                }
                                
                                .close:hover,
                                .close:focus {
                                  color: red;
                                  cursor: pointer;
                                }
                                
                                /* Add Zoom Animation */
                                .animate {
                                  -webkit-animation: animatezoom 0.6s;
                                  animation: animatezoom 0.6s
                                }
                                
                                @-webkit-keyframes animatezoom {
                                  from {-webkit-transform: scale(0)} 
                                  to {-webkit-transform: scale(1)}
                                }
                                  
                                @keyframes animatezoom {
                                  from {transform: scale(0)} 
                                  to {transform: scale(1)}
                                }
                                
                                /* Change styles for span and cancel button on extra small screens */
                                @media screen and (max-width: 300px) {
                                  span.psw {
                                     display: block;
                                     float: none;
                                  }
                                  .cancelbtn {
                                     width: 100%;
                                  }
                                }
                                </style>
                                </head>
                <body>
                    <main>
                        <h2 > <a href ="Administration_Login.html">BACK</a></h2>
                     
                        <button type="button"><a href="indexht.php">REFRESH </a></button> 
                        <br>
                       <center> <button type="button"><a href="subhtml/setnewpassword.html">Change password </a></button> 
                       </center>
    <br>
                            <div>
                                    
                                    </h1>
                                    </div>
                                    <center>
                            <h2>FILL DATA OF MUNCIPALITY</h2>

                            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">FORM</button>
                            
                            <div id="id01" class="modal">
                              
                              <form class="modal-content animate" action="index1.php" method="post">
                                <div class="imgcontainer">
                                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                  
                                </div>
                            
                                <div class="container">
                                    <p><b> ZONE</b></p>
                                    <select name ="zone" type="text">
                                          <option value="sagarmatha">Sagarmatha</option>
                                          <option value="Dhanusha">Dhanusha</option>
                                          <option value="Bagmati">Bagmati</option>
                                          <option value="Dhanukuta">Dhanukuta</option>
                                          
                                        </select><br>
                                        <br>

                                        <p><b> District</b></p>
                                        <select name ="district" type="text">
                                              <option value="saptari">saptari</option>
                                              <option value="Janakpur">Janakpur</option>
                                              <option value="Sirha">Sirha</option>
                                              <option value="Sarlahi">Sarlahi</option>
                                              
                                            </select><br>
                                            <br>
    
                                            <p><b>Muncipality_Name</b></p>
                                            <select name ="munname" type="text">
                                                  <option value="Rajbiraj">Rajbiraj</option>
                                                  
                                                </select><br>
                                                <br>
        
                                 
                                  
                                  <button type="submit" name="submit">Login</button>
                                  
                                </div>
                            
                                
                              </form>
                            </div>
                          </center>
                            <script>
                            // Get the modal
                            var modal = document.getElementById('id01');
                            
                            // When the user clicks anywhere outside of the modal, close it
                            window.onclick = function(event) {
                                if (event.target == modal) {
                                    modal.style.display = "none";
                                }
                            }
                            </script>
                            


    

</div><br>
<center>
<br>

<button type="button"><a href="View.html">View the Record </a></button> 
<br>
<button type="button"><a href="update.html">update the Record </a></button>
<form action="?" method ="post" >
    <button type="submit" name="view1">view Newcomplain</button><br>
    <button type="submit" name="view2">view Allcomplain </button><br>
    
    <button type="button"><a href="birthid.html">Enter the Record Of Birthid And Citizenid </a></button> 
    <br>
  </center>

<?php

        $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="muncipality";
        $conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
        
        
        if(!$conn)
        {
            echo "Server is not connected";
        
        }
       
       
        if(isset($_POST["view1"]))
        {  
          
$sql="SELECT * from complain where status='unseen' ";
$data=mysqli_query($conn,$sql);
$num=mysqli_num_rows($data);

if($num==0)
{
  echo "<center><b>No new complain</b></center>";
}

$i=0;

while($result=mysqli_fetch_assoc($data))
{
 
  $i=$i+1;
  echo  $i.")  ".$result["complain"]."<br>"; 
  $sql2="UPDATE complain set status='seen' ";
  mysqli_query($conn,$sql2);
}
}

if(isset($_POST["view2"]))
        {  

$sql2="SELECT * from complain  ";
$data2=mysqli_query($conn,$sql2);
$num2=mysqli_num_rows($data2);
if($num2==0)
{
  echo "<center>No  complain till now</center>";
}

$i=0;

while($result2=mysqli_fetch_assoc($data2))
{
  $i=$i+1;
  echo  $i.")  ".$result2["complain"]."<br>"; 
  
}
}
?>
</form>
    </main>
    </body>
</html>