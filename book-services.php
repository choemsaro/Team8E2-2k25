<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

    if(isset($_POST['submit']))
  {
  	$bid=$_GET['bookid'];
  	
 $name=$_POST['name'];
  $mobnum=$_POST['mobnum'];
 $email=$_POST['email'];
 $edate=$_POST['edate'];
 $est=$_POST['est'];
  $eetime=$_POST['eetime'];
 $vaddress=$_POST['vaddress'];
 $eventtype=$_POST['eventtype'];
 $addinfo=$_POST['addinfo'];
 $bookingid=mt_rand(100000000, 999999999);
$sql="insert into tblbooking(BookingID,ServiceID,Name,MobileNumber,Email,EventDate,EventStartingtime,EventEndingtime,VenueAddress,EventType,AdditionalInformation)values(:bookingid,:bid,:name,:mobnum,:email,:edate,:est,:eetime,:vaddress,:eventtype,:addinfo)";
$query=$dbh->prepare($sql);
$query->bindParam(':bookingid',$bookingid,PDO::PARAM_STR);
$query->bindParam(':bid',$bid,PDO::PARAM_STR);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':mobnum',$mobnum,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':edate',$edate,PDO::PARAM_STR);
$query->bindParam(':est',$est,PDO::PARAM_STR);
$query->bindParam(':eetime',$eetime,PDO::PARAM_STR);
$query->bindParam(':vaddress',$vaddress,PDO::PARAM_STR);
$query->bindParam(':eventtype',$eventtype,PDO::PARAM_STR);
$query->bindParam(':addinfo',$addinfo,PDO::PARAM_STR);

 $query->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Your Booking Request Has Been Send. We Will Contact You Soon")</script>';
echo "<script>window.location.href ='services.php'</script>";
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
<title>Online DJ Management System || Contact Us</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="./style/command.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
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
			/* Main container for contact section */

/* Centering the contact form */
.container_booking {
    width: 90%;
    margin: 0 auto;
}

/* Contact grids */
.contact-grids {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}

/* Left section - Form */
.contact-left {
    width: 50%;
    padding: 20px;
}

/* Right section - Image */
.contact-right {
    width: 50%;
    display: flex;
	height: 950px;
	top: 60px;
    justify-content: center;
    align-items: center;
}

/* Responsive Image */
.contact-map img {
    width: 100%;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

/* Form input fields */
form ul {
    list-style: none;
    padding: 0;
    margin: 0 0 15px 0;
}

form ul li {
    margin-bottom: 10px;
}

/* Labels */
.text-info {
    font-size: 16px;
    font-weight: 600;
    color: #333;
}

/* Input fields */
.form-control,
.text {
    width: 100%;
    padding: 0px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

/* Textarea field */
textarea.form-control {
    height: 100px;
    resize: none;
}

/* Dropdown select */
select.form-control {
    cursor: pointer;
}

/* Submit button */
input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 12px 20px;
    font-size: 16px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .container {
        width: 90%;
    }
}

@media (max-width: 768px) {
    .contact-grids {
        flex-direction: column;
        text-align: center;
    }

    .contact-left, .contact-right {
        width: 100%;
    }

    .contact-map img {
        max-width: 100%;
    }
}

	</style>

</head>
<body>
<?php include_once('includes/header.php');?>
<div class="contact content">
	 <div class="container_booking"> 		 
			 <!-- <div class="contact-grids"> -->
				 <div class="col-md-6 contact-left">
					 <p>Book Your Package Tour Travel now. </p>
					 <form method="post">
					 	
						 <ul>
							 <li class="text-dark">Name: </li>
							 <li><input type="text" style="padding: 10px;" class="form-control" name="name" required="true"></li>
						 </ul>					 				 
						 <ul>
							 <li class="text-dark">Email: </li>
							 <li><input type="email" style="padding: 10px;" class="form-control" name="email" required="true"></li>
						 </ul>
						 <ul>
						 	 <ul>
							 <li class="text-dark">Mobile Number: </li>
							 <li><input type="text" class="text" style="padding: 10px;"  name="mobnum"  required="true" maxlength="10" pattern="[0-9]+"></li>
						 </ul>
							 <li class="text-dark">Package Date: </li>
							 <li><input type="date" class="form-control" style="padding: 10px;"  name="edate" required="true"></li>
						 </ul>
						 <ul>
							 <li class="text-dark">Package Starting Time:</li>
							 <li><select type="text" class="form-control" style="padding: 5px;"  name="est" required="true">
							 	<option value="">Select Starting Time</option>
							 	<option value="1 a.m">1 a.m</option>
							 	<option value="2 a.m">2 a.m</option>
							 	<option value="3 a.m">3 a.m</option>
							 	<option value="4 a.m">4 a.m</option>
							 	<option value="5 a.m">5 a.m</option>
							 	<option value="6 a.m">6 a.m</option>
							 	<option value="7 a.m">7 a.m</option>
							 	<option value="8 a.m">8 a.m"</option>
							 	<option value="9 a.m">9 a.m</option>
							 	<option value="10 a.m">10 a.m</option>
							 	<option value="11 a.m">11 a.m</option>
							 	<option value="12 p.m">12 a.m</option>
							 	<option value="1 p.m">1 p.m</option>
							 	<option value="2 p.m">2 p.m</option>
							 	<option value="3 p.m">3 p.m</option>
							 	<option value="4 p.m">4 p.m</option>
							 	<option value="5 p.m">5 p.m</option>
							 	<option value="6 p.m">6 p.m</option>
							 	<option value="7 p.m">7 p.m</option>
							 	<option value="8 p.m">8 p.m</option>
							 	<option value="9 p.m">9 p.m</option>
							 	<option value="10 p.m">10 p.m</option>
							 	<option value="10 p.m">10 p.m</option>
							 	<option value="12 a.m">12 a.m</option>
							 </select></li>
						 </ul>
						 <ul>
							 <li class="text-dark">Package Finish Time:</li>
							 <li><select type="text" class="form-control" style="padding: 5px;" name="eetime" required="true">
							 	<option value="">Select Finish Time</option>
							 	<option value="1 a.m">1 a.m</option>
							 	<option value="2 a.m">2 a.m</option>
							 	<option value="3 a.m">3 a.m</option>
							 	<option value="4 a.m">4 a.m</option>
							 	<option value="5 a.m">5 a.m</option>
							 	<option value="6 a.m">6 a.m</option>
							 	<option value="7 a.m">7 a.m</option>
							 	<option value="8 a.m">8 a.m"</option>
							 	<option value="9 a.m">9 a.m</option>
							 	<option value="10 a.m">10 a.m</option>
							 	<option value="11 a.m">11 a.m</option>
							 	<option value="12 p.m">12 a.m</option>
							 	<option value="1 p.m">1 p.m</option>
							 	<option value="2 p.m">2 p.m</option>
							 	<option value="3 p.m">3 p.m</option>
							 	<option value="4 p.m">4 p.m</option>
							 	<option value="5 p.m">5 p.m</option>
							 	<option value="6 p.m">6 p.m</option>
							 	<option value="7 p.m">7 p.m</option>
							 	<option value="8 p.m">8 p.m</option>
							 	<option value="9 p.m">9 p.m</option>
							 	<option value="10 p.m">10 p.m</option>
							 	<option value="10 p.m">10 p.m</option>
							 	<option value="12 a.m">12 a.m</option>
							 </select></li>
						 </ul>
						 <ul>
							 <li class="text-dark">Venue Address:</li>
							 <li><textarea type="text" style="padding: 10px;" class="form-control" name="vaddress" required="true" ></textarea></li>
						 </ul>
						 <ul>
							 <li class="text-dark">Type of Package:</li>
							 <li><select type="text" class="form-control" style="padding: 5px;" name="eventtype" required="true" >
							 	<option value="">Choose Package Type</option>
							 	<?php 
									$sql2 = "SELECT * from   tbleventtype ";
									$query2 = $dbh -> prepare($sql2);
									$query2->execute();
									$result2=$query2->fetchAll(PDO::FETCH_OBJ);

									foreach($result2 as $row)
									{          
										?>  
									<option value="<?php echo htmlentities($row->EventType);?>"><?php echo htmlentities($row->EventType);?></option>
									<?php } ?>
							 </select></li>
						 </ul>	
						 <ul>
							 <li class="text-dark">Additional Information:</li>
							 <li><textarea type="text" style="padding: 10px;" class="form-control" name="addinfo" required="true"></textarea></li>
						 </ul>					
						 <input type="submit" name="submit" value="Book">					 
					 </form>
				 </div>
				 <div class="col-md-6 contact-right">
					 	<div class="contact-map">
						<img src="./img/cycle/thank3.png" class="img-responsive" alt=""/>
						</div>
				 </div>
				 <div class="clearfix"></div>
			 </div>
		 </div>
		<?php include_once('includes/footer.php');?>
	 <!-- </div> -->
</div>
<!---->

<!---->
</body>
</html>