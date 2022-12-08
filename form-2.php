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
        <form action="form-3.php" method="POST">
        <div class="title">
            STEP-2
        </div>

        <div class="form">
            <div class="input_field">
                <label>HSC SCHOOL NAME</label>
                <input type="text" class="input" name="hname">
            </div>

            <div class="input_field">
                <label>HSC BOARD</label>
                <input type="text" class="input" name="hboard">
            </div>

            <div class="input_field">
                <label for="quantity">HSC SCORE IN %</label>
                <input type="number" id="quantity" class="input" name="hmark">
            </div>

            <div class="input_field">
                <label>SSC SCHOOL NAME</label>
                <input type="text" class="input" name="sname">
            </div>

            <div class="input_field">
                <label>SSC BOARD</label>
                <input type="text" class="input" name="sboard">
            </div>

            <div class="input_field">
            <label for="quantity">SSC SCORE IN %</label>
                <input type="number" id="quantity" class="input" name="smark">
            </div>

            <div class="input_field">
                <label>CURRENT EDUCATION</label>
                <input type="text" class="input" name="cedu">
            </div>

            <div class="input_field">
                <label>INSTITUTE NAME</label>
                <input type="text" class="input" name="ciname">
            </div>

            <div class="input_field">
            <label for="quantity">OVERALL SEMESTER SCORE IN %</label>
                <input type="number" id="quantity" class="input" name="dmark">
            </div>
            <div class="input_field">
                <label for="quantity">CURRENT BACKLOGS IF ANY</label>
                <input type="number" class="input" name="backlogs">
            </div>
            <div class="input_field">
                <input type="submit" value="Submit" class="btn" name="submit">
            </div>
            </form>
        </div>

</body>

</html>