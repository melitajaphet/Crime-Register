  
<?php
  $conn = mysqli_connect('localhost','root','');
  mysqli_select_db($conn , 'crime_register');

  if ($conn) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $door = $_POST['door'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $pincode = $_POST['pincode'];
    $policestation = $_POST['policestation'];
    $complaint = $_POST['complaint'];
    $s = "INSERT INTO crimes(name, email, contact_number, door, address, city, state, country, pincode, policestation, complaint) VALUES ('".$name."', '".$email."', '".$contact_number."', '".$door."', '".$address."', '".$city."', '".$state."', '".$country."', '".$pincode."', '".$policestation."', '".$complaint."')";
    if (mysqli_query( $conn , $s )) {
      echo "Registered crime successfully";
    } else {
      echo "Some error occurred, try again!";
    }
  }
  else {
    echo "Not connected";
  }

?>