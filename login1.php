<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Parking</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center" id="header">
                   <h1> Fast-track Vehicle Parking </h1>
                   <ul>
                       <li><a href="login1.php">Home</a></li>
                       <li><a href="qr.html">Payment</a></li>
                       <li><a href="login.php">Logout</a></li>
                   </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center mb-3">
                    <h2  class="register">Registration Form</h2>
                    <form action="slot.php" method="POST" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="owner">Vehicle Owner Name:</span>
                        </div>
                        <input type="text" name="owner"required class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> Vehicle Type:</span>
                            <select name="cars" id="cars">
                                <option value="Two wheeler">Two wheeler</option>
                                <option value="four wheeler">Four wheeler</option>
                                <option value="Electric vehicle">Electric vehicle</option>
                                <option value="Specially abled">Specially abled</option>
                            </select>
                        </div>
                        <input type="text" name="type" required class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> Vehicle Number:</span>     
                        </div>
                        <input type="tel" id="number" name="Number" class="form-control" 
                            pattern="(([A-Z]){2,3}(|-)([0-9]){1,2}(|-)([A-Z]){2}(|-)([0-9]){1,4})|(([A-Z]){2,3}(|-)([0-9]){1,4})" 
                                required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> Entry Date:</span>
                        </div>
                        <input type="date" id="inputdate" name="inputdate" required class="form-control"> 
                        <div class="input-group-prepend">
                            <span class="input-group-text">Entry Time</span>
                        </div>
                        <input type="time"id="time"class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> Exit Date:</span>
                        </div>
                        <input type="date" id="txtDate" name="outputdate" required class="form-control">
                        <div class="input-group-prepend">
                                <span class="input-group-text">Exit Time</span>
                            </div>
                        <input type="time"id="times"class="form-control"> 
                    </div>
                    
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Phone Number:</span>
                            <span class="input-group-text">+ 91 </span>
                        </div>
                        <input type="tel" id="phone" name="phone" required class="form-control"
                            pattern="[7-9]{1}[0-9]{2}[0-9]{3}[0-9]{4}"
                            required>
                    </div>
                   <input type="submit" name="submit" class="btn btn-primary my-3">
                    
                   </form>
                </div>
                <div class="col-md-6">                                 
                    <div id="car">
                        <h2>Parking Space Information :</h2>
                        <<h3>Total space :- <span> 24</span> </h3>
                        <h4>Two wheeler: A1-A7</h4>
                        <h4>Four wheeler: B1-B7</h4>
                        <h4>Electric vehicle: C1-C7</h4>
                        <h4>Specially abled: S1-S3</h4>
                    </div>
            </div>
        </div>         
    </div>
</body>
<script type="text/javascript">
$(function(){
    var dtToday = new Date();
 
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
     day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
    $('#inputdate').attr('min', maxDate);
});
$(function(){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var minDate= year + '-' + month + '-' + day;

    $('#txtDate').attr('min', minDate);
});
</script>
</html>
<?php
    $conn = mysqli_connect('localhost', 'root', '', 'parking');
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "INSERT into login(username,password)Values('$username','$password')";
        $run = mysqli_query($conn,$query);
        if($run)
        {
            echo "data inserted";
        }
        else{
           // echo "login failed";
        }
    }
?>
