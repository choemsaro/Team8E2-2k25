<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

    if(isset($_POST['submit']))
  {
 $name=$_POST['name'];
  $mobnum=$_POST['mobnum'];
 $email=$_POST['email'];
 $msg=$_POST['message'];
$sql="insert into tbluser(Name,MobileNumber,Email,Message)values(:name,:mobnum,:email,:msg)";
$query=$dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':mobnum',$mobnum,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':msg',$msg,PDO::PARAM_STR);
 $query->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Your Message Has Been Send. We Will Contact You Soon")</script>';
echo "<script>window.location.href ='contact.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

}

?>
<!DOCTYPE html>
<html>
<head>
<title>Tour Travel Management System || Contact Us</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="./style/command.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<!---//End-css-style-switecher----->
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
	   <script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>

<style>
    body{
        font-size: 16px;
    }
    /* General Styles */
    .container_contact {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        font-family: Arial, sans-serif;
    }

    /* Breadcrumb Navigation */
    .breadcrumb {
        padding: 10px 16px;
        list-style: none;
        background-color: #f8f9fa;
        border-radius: 5px;
    }

    .breadcrumb li {
        display: inline;
        font-size: 16px;
    }

    .breadcrumb li+li:before {
        padding: 8px;
        color: #6c757d;
        content: "/\00a0";
    }

    .breadcrumb li a {
        color: #007bff;
        text-decoration: none;
    }

    .breadcrumb li.active {
        color: #6c757d;
    }

    /* Contact Details */
    .contact-main {
        margin: 20px 0;
    }

    .contact-main h2 {
        font-size: 28px;
        color: #333;
        margin-bottom: 20px;
    }

    .contact-main h4 {
        font-size: 18px;
        color: #555;
        margin: 10px 0;
    }

    .contact-main h4 i {
        margin-right: 10px;
        color: #007bff;
    }

    /* Contact Form */
    .contact-grids {
        display: flex;
        gap: 20px;
        margin-top: 30px;
    }

    .contact-left {
        flex: 1;
    }

    .contact-left p {
        font-size: 16px;
        color: #555;
        margin-bottom: 20px;
    }

    .contact-left ul {
        list-style: none;
        padding: 0;
    }

    .contact-left ul li {
        margin-bottom: 15px;
    }

    .contact-left ul li.text-info {
        font-weight: bold;
        color: #333;
    }

    .contact-left input[type="text"],
    .contact-left input[type="email"],
    .contact-left textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
    }

    .contact-left textarea {
        height: 150px;
        resize: vertical;
    }

    .contact-left input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .contact-left input[type="submit"]:hover {
        background-color: #0056b3;
    }

    /* Google Map Section */
    .contact-right {
        flex: 1;
    }

    .contact-map {
        height: 400px;
        border-radius: 5px;
        overflow: hidden;
    }

    .contact-map iframe {
        width: 100%;
        height: 100%;
        border: 0;
    }

    /* Clearfix */
    .clearfix {
        clear: both;
    }
</style>

</head>
<body>
<?php include_once('includes/header.php');?>
<div class="contact content">
    <div class="container_contact">
        <!-- Breadcrumb Navigation -->
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Contact</li>	  
        </ol>

        <?php
        $sql = "SELECT * FROM tblpage WHERE PageType='contactus'";
        $query = $dbh->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() > 0) {
            foreach ($results as $row) { ?>            
                <h2><?php echo htmlentities($row->PageTitle); ?></h2>
                <div class="contact-main">
                    <h4><i class="glyphicon glyphicon-home"></i> <?php echo htmlentities($row->PageDescription); ?></h4>
                    <h4><i class="glyphicon glyphicon-envelope"></i> <?php echo htmlentities($row->Email); ?></h4>
                    <h4><i class="glyphicon glyphicon-phone"></i> <?php echo htmlentities($row->MobileNumber); ?></h4>
        <?php }
        } ?>

        <!-- Contact Form -->
        <div class="contact-grids">
            <div class="col-md-3 contact-left">
                <form method="post">
                    <ul>
                        <li class="text-dark" style="color: #333;">Name:</li>
                        <li><input type="text" name="name" required></li>
                    </ul>
                    <ul>
                        <li class="text-dark">Email:</li>
                        <li><input type="email" name="email" required></li>
                    </ul>
                    <ul>
                        <li class="text-dark">Mobile Number:</li>
                        <li><input type="text" name="mobnum" required maxlength="10" pattern="[0-9]+"></li>
                    </ul>
                    <ul>
                        <li class="text-dark">Message:</li>
                        <li><textarea name="message" required></textarea></li>
                    </ul>
                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>
           <div class="col-md-6 contact-right">
                <div class="contact-map" style="margin-top: 40px; height: 450px; width: 700px;">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12611936.547508111!2d101.17114789453126!3d12.565679000000013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310787bfd4dc3743%3A0xe4b7bfe089f41253!2sCambodia!5e0!3m2!1sen!2skh!4v1710812345678"
                        width="100%" height="400" style="border:0;" allowfullscreen loading="lazy">
                    </iframe>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---->
<?php include_once('includes/footer.php');?>
<!---->
</body>
</html>