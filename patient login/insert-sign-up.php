<html>
<body>
<?php
 
// Create connection
$conn = new mysqli('localhost','root','');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "DB Connected successfully";
 
// this will select the Database sample_db
mysqli_select_db($conn,"patient_signup");
 
echo "\n DB is seleted as Test  successfully";
 
// create INSERT query
 
 
$sql="INSERT INTO patient_record(Patient name,Address Lane 1,Address Lane 2,District,State,Create Password,Confirm Password,Aadhar card number) VALUES ('$_POST[Patient name]','$_[Address Lane 1]$_POST[Address Lane 2]','$_POST[District]','$_POST[State]','$_POST[Create Password]','$_POST[Confirm Password]','$_POST[Patient name]','$_POST[Aadhar Card Number]')";
 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
mysqli_close($conn);
?>
</body>
</html>