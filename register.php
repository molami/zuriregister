<?php
$error = '';
$name = '';
$email = '';
$dateOfBirth = '';
$gender = '';
$country = '';


if (isset($_POST["submit"])) {
  // code...
  registerUser($name, $email, $dateOfBirth, $gender, $country );
function registerUser($name, $email, $dateOfBirth, $gender, $country );{
    if (empty($_POST["name"])) {
      // code...
      $error .= '<label class ="text-danger"> Please Enter Your Name';
    }
    else {
      // code...
      $name = $_POST["name"]

    }
    if (empty($_POST["email"])) {
      // code...
      $error .= '<label class ="text-danger"> Please Enter Your Email</label>';
    }
    else {
      // code...
      $name = $_POST["email"]

    }
    if (empty($_POST["dateOfBirth"])) {
      // code...
      $error .= '<label class ="text-danger"> Please Enter Your Date Of Birth</label>';
    }
    else {
      // code...
      $name = $_POST["dateOfBirth"]

    }
    if (empty($_POST["gender"])) {
      // code...
      $error .= '<label class ="text-danger"> Please Choose Your Gender</label>';
    }
    else {
      // code...
      $name = $_POST["gender"]

    }
    if (empty($_POST["country"])) {
      // code...
      $error .= '<label class ="text-danger"> Please Select Your Country</label>';
    }
    else {
      // code...
      $name = $_POST["country"]

    }
    if($error == ''){
      $file_open = fopen("userdata.csv","a");
      $no_rows = count(file("userdata.csv"));
      if ($no_rows > 1){
        $no_rows = ($no_rows - 1) + 1;
      }
      $form_data = array(
        'sr_no' => $no_rows,
        'name' => $name,
        'email' => $email,
        'dateOfBirth' => $dateOfBirth,
        'gender' => $gender,
        'country' => $country
      );
      fputcsv($file_open, $form_data);
      $error .= '<p>Account Created Sucessfully</p>';
      $error = '';
      $name = '';
      $email = '';
      $dateOfBirth = '';
      $gender = '';
      $country = '';

    }

  }
else:
  echo "error"
}
 ?>
