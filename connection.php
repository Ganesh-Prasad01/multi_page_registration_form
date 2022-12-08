<?php
$conn=mysqli_connect("localhost","root","","responsiveform-1");
if(!$conn){
    die(mysqli_error($con));
    if(isset($POST['submit']))
{
$first_name=$_POST["fname"];
$last_name=$_POST["lname"];
$birthday=$_POST["dob"];
$email=$_POST["email"];
$father_name=$_POST["faname"];
$mother_name=$_POST["mname"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$nationality=$_POST["nationality"];
$phone=$_POST["phone"];
}
// connection to database
else{
    $sql="insert into `form1`(fname,lname,dob,email,faname,mname,gender,address,nationality,phone) 
    values('$first_name','$last_name','$birthday','$email','$father_name','$mother_name','$gender','$address','$nationality','$phone')";
        $result=mysqli_query($con,$sql);

        if($result){
            echo '<script>
            alert("Registration Successful...")
            </script>';
        }
}
}
?>