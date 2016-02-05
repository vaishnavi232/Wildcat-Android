<?php
$servername = "";
$username = "";
$password = "";
$dbname="";
$conn=new mysqli($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " );
} 
echo "Connected successfully";

$sql="SELECT * FROM MyGuests;";
$result=mysqli_query($conn,$sql);
$response=array();
while($row=mysqli_fetch_array($result))
{
	array_push($response,array("User_name"=>$row[0],"id"=>$row[1],"Lat"=>$row[2],"Long"=>$row[3],"Sighting"=>$row[4]));
}
echo json_encode(array("User_details"=>$response));
mysqli_close($conn);

?>
