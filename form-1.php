<?php include("connection.php");  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Registration Form</title>
</head>

<body>
    <div class="container">
        <form action="form-2.php" method="POST">
        <div class="title">
            STEP-1
        </div>

        <div class="form">
            <div class="input_field">
                <label>First Name</label>
                <input type="text" class="input" name="fname" require="required" id="first_name">
            </div>

            <div class="input_field">
                <label>Last Name</label>
                <input type="text" class="input" name="lname" id="last_name">
            </div>

            <div class="input_field">
                <label for="birthday">Date of Birth</label>
                <input type="date" id="birthday" class="input" name="dob">
            </div>

            <div class="input_field">
                <label for="email">E-Mail Address</label>
                <input type="email" id="email" class="input" name="email">
            </div>

            <div class="input_field">
                <label>Father's Name</label>
                <input type="text" class="input" name="faname" id="father_name">
            </div>

            <div class="input_field">
                <label>Mother's Name</label>
                <input type="text" class="input" name="mname" id="mother_name">
            </div>

            <div class="input_field">
                <label>Gender</label>
             <div class="custom_select">
                <select name="gender" id="gender">
                    <option value="Not selected"> Select </option>
                    <option value="Male"> Male </option>
                    <option value="Female"> Female </option>
                    <option value="Trans">Transgender</option>
                </select>
             </div>
            </div>

            <div class="input_field">
                <label>Address</label>
                <textarea class="textarea" name="address" id="address">  </textarea>
            </div>

            <div class="input_field">
                <label>Natoinality</label>
             <div class="custom_select">
                <select name="nationality" id="nationality">
                    <option value="Not selected"> Select </option>
                    <option value="Indian"> INDIAN </option>
                    <option value="NRI"> NRI </option>
                </select>
             </div>

             <div class="input_number">
                <label>Phone</label>
                <input type="text" class="input" name="phone" require="required" maxlength="10" minlength="10" id="phone">
            </div>
        

            </div>

            <div class="input_field">
                <input type="submit" value="Submit" class="btn" name="submit">
            </div>
            </form>
        </div>

</body>

</html>