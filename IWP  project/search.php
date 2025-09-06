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
if(isset($_POST["query"]))
{

$output='';
$query="SELECT firstname from citizen where firstname LIKE '%".$_POST["query"]."%' ";
$result=mysqli_query($conn,$query);
$output='<ul class ="list-unstyled">';
if(mysqli_num_rows($result)>0)
{
    while($row =mysqli_fetch_array($result))
    {
        $output.='<li>'.$row["firstname"].'</li>';

    }
}
else
{

    $output.='<li> Name Not found </li>';

}
$output.='</ul>';
echo $output;

}
?>