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
        <form action="#" method="POST">
            <div class="title">
                STEP-3
                <h6>Upload Documents</h6>
            </div>
            <div class="form">
                <div class="input_field">
                    <label for="myfile">Upload Profile Image:</label>
                    <input type="file" id="img" accept="image/*" name="image">
                </div>
                <div class="input_field">
                    <label for="myfile">Upload HSC Marksheet:</label>
                    <input type="file" id="pdf" accept="pdf/*" name="hsc">
                </div>
                <div class="input_field">
                    <label for="myfile">Upload SSC Marksheet:</label>
                    <input type="file" id="myfile" name="ssc">
                </div>
                <div class="input_field">
                    <label for="myfile">Upload Semester Marksheet:</label>
                    <input type="file" id="myfile" name="sem">
                </div>
                <div class="input_field">
                    <input type="submit" value="Submit" class="btn" name="submit">
                </div>
            </div>
        </form>
    </div>
</body>

</html>