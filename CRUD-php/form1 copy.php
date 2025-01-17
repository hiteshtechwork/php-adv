<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Operation</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="container">
        <div class="title">Registration Form</div>

        <div class="form">

            <div class="input_field">
                <label for="">First Name</label>
                <input type="text" class="input" name="fname">
            </div>
            <div class="input_field">
                <label for="">Last Name</label>
                <input type="text" class="input" name="lname">
            </div>
            <div class="input_field">
                <label for="">Password  </label>
                <input type="password" class="input" name="password">
            </div>
            <div class="input_field">
                <label for="">Confirm Password</label>
                <input type="password" class="input" name="confirm_password">
            </div>
            <div class="input_field">
                <label for="">Gender</label>
                <div class="custom_select">
                <select name="" id="" >
                    <option value="">select</option>
                    <option value="male">male</option>
                    <option value="female">Female</option>
                </select>
                </div>
            </div>
            <div class="input_field">
                <label for="">Email</label>
                <input type="text" class="input" name="email">
            </div>
            <div class="input_field">
                <label for="">Address</label>
              <textarea class="textarea" name="address" id="" cols="30" rows="5"></textarea>
            </div>
            <div class="input_field terms ">
                <label for="" class="check">
                    <input type="checkbox">
                    <span class ="checkmark"></span>
                </label>
                <p>Agree to Terms and Conditions</p>
            </div>
            <div class="input_field">
                <input type="submit" value="register" class="btn">
            </div>


        </div>

    </div>
</body>
</html>
