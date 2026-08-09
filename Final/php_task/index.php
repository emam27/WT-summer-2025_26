

<?php

$name = $age = $email = $membership = $department = $phone = "";

$nameErr = $ageErr = $emailErr = $membershipErr = $departmentErr = $phoneErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Name Validation

    if (empty($_POST["name"])) {

        $nameErr = "Name is required";

    } else {

        $name = trim($_POST["name"]);

        if (!preg_match("/^[a-zA-Z ]+$/", $name)) {

            $nameErr = "Only letters and spaces are allowed";

        }

    }

    // Age Validation

    if (empty($_POST["age"])) {

        $ageErr = "Age is required";

    } else {

        $age = $_POST["age"];

        if (!is_numeric($age) || $age < 18 || $age > 30) {

            $ageErr = "Age must be between 18 and 30";

        }

    }

    // Email Validation

    if (empty($_POST["email"])) {

        $emailErr = "Email is required";

    } else {

        $email = trim($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $emailErr = "Invalid email format";

        }

    }

    // Membership Validation

    if (empty($_POST["membership"])) {

        $membershipErr = "Please select a membership type.";

    } else {

        $membership = $_POST["membership"];

    }

    // Department Validation

    if (empty($_POST["department"]) || $_POST["department"] == "") {

        $departmentErr = "Please select your department.";

    } else {

        $department = $_POST["department"];

    }

    // Phone Validation

    if (empty($_POST["phone"])) {

        $phoneErr = "Phone number is required";

    } else {

        $phone = trim($_POST["phone"]);

        if (!preg_match("/^[0-9]{11}$/", $phone)) {

            $phoneErr = "Phone number must contain exactly 11 digits.";

        }

    }

}

?>







<!DOCTYPE html>

<html>

<head>

    <title>Student Technology Club Registration</title>

</head>

<body>

<h2>Student Technology Club Registration Form</h2>

<form method="post">

    <b>Student Name:</b><br>

    <input type="text" name="name" value="<?php echo $name; ?>">

    <span style="color:red;">* <?php echo $nameErr; ?></span>

    <br><br>

    <b>Student Age:</b><br>

    <input type="number" name="age" value="<?php echo $age; ?>">

    <span style="color:red;">* <?php echo $ageErr; ?></span>

    <br><br>

    <b>University Email:</b><br>

    <input type="email" name="email" value="<?php echo $email; ?>">

    <span style="color:red;">* <?php echo $emailErr; ?></span>

    <br><br>

    <b>Membership Type:</b><br>

    <input type="radio" name="membership" value="Regular Member"
