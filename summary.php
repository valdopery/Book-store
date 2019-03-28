 <?php
session_start();
$name = $_POST['name'];
$pincode = $_POST['pincode'];
$address = $_POST['address'];
$landmark = $_POST['landmark'];
$city = $_POST['city'];
$state = $_POST['state'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'store');
$q = "insert into address (name,pincode,address,landmark,city,state,email,phone) values ('$name','$pincode','$address','$landmark','$city','$state','$email','$phone')";
$result = mysqli_query($con,$q);
$_SESSION['name'] = $name;
$_SESSION['pincode'] = $pincode;
$_SESSION['address'] = $address;
$_SESSION['landmark'] = $landmark;
$_SESSION['city'] = $city;
$_SESSION['state'] = $state;
$_SESSION['email'] = $email;
$_SESSION['phone'] = $phone;

if($result){
	
	header('location: checkout.php');
	
	
}
else{
	echo "insertion failed";
}


?>