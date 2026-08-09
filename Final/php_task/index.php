
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
