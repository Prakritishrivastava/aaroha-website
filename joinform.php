<?php
$servername = "localhost";
$username = "gebgtik9_Shree";
$password = "aaroha@123";
$dbname="aaroha";


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$join = $_POST['join'];
$update = $_POST['update'];


// Create connection
$conn =  mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$query ="INSERT INTO info(UserName,Email,Phone,Gender,City,JoinUs,UpdateYN) VALUES('$name','$email','$phone','$gender','$city','$join','$update')";
if(!mysqli_query($conn,$query))
{
    die('Error in inserting records'.mysqli_connect_error());
}else{?>
    <div>
        <h1 style="text-align:center;">Submitted Successfully</h1>
        <p style="text-align:center;"><a href="index.html">Click Here</a> to go back to home page</p>
    </div>
<?php
}
?>