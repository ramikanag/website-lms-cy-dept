<?php

session_start();

if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif ($_SESSION['usertype']=='student') 
{
    header("location:login.php");    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" type="text/css" href="admin.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
       <header class="header">
            <a href="">Admin Dashboard</a>
            <div class="logout">
                <a href="logout.php" class="btn btn-primary">Logout</a>
            </div>
       </header>

       <aside>
        <ul>
            <li>
                <a href="">Admission</a>
            </li>

            <li>
                <a href="">Add Student</a>
            </li>

            <li>
                <a href="">View Student</a>
            </li>

            <li>
                <a href="">Add Teacher</a>
            </li>

            <li>
                <a href="">View Teachers</a>
            </li>

            <li>
                <a href="">View Courses</a>
            </li>
        </ul>
       </aside>

       <div>
        <h1>Semester</h1>
       </div>
        <center>
            <h1>Courses</h1>
        </center>
        <div class="container">

            <div class="row">

                <div class="col-md-16">
                    <p>1st Semester </p>
                    <a href="" class="btn btn-success">Veiw</a>
                </div>

                <div class="col-md-16">
                    <p>2nd Semester </p>
                    <a href="" class="btn btn-success">Veiw</a>
                </div>

                <div class="col-md-16">
                    <p>3rd Semester </p>
                    <a href="" class="btn btn-success">Veiw</a>
                </div>
            <div class="row">

                <div class="col-md-8">
                    <p>4th Semester </p>
                    <a href="" class="btn btn-success">Veiw</a>
                </div>

                <div class="col-md-8">
                    <p>5th Semester </p>
                    <a href="" class="btn btn-success">Veiw</a>
                </div>

                <div class="col-md-8">
                    <p>6th Semester </p>
                    <a href="" class="btn btn-success">Veiw</a>
                </div>
                
            </div>
    </body>
</html>