<?php //error_reporting(0);
include('includes/dbconnection.php');


?>
<!DOCTYPE html>
<html>
<head>
<title>Online DJ Management System || Request Status</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>

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

</head>
<body>
<?php include_once('includes/header.php');?>
<div class="contact content">
	 <div class="container"> 		 
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Request Details</li>	  
		 </ol>

		 <h2>Request Details #<?php echo $_GET['bookingid'];?></h2>
		 <div class="contact-main">


			 <div class="contact-grids">

<?php 
$eid=$_GET['bid'];
$sql="SELECT tblbooking.BookingID,tblbooking.Name,tblbooking.MobileNumber,tblbooking.Email,tblbooking.EventDate,tblbooking.EventStartingtime,tblbooking.EventEndingtime,tblbooking.VenueAddress,tblbooking.EventType,tblbooking.AdditionalInformation,tblbooking.BookingDate,tblbooking.Remark,tblbooking.Status,tblbooking.UpdationDate,tblservice.ServiceName,tblservice.SerDes,tblservice.ServicePrice from tblbooking join tblservice on tblbooking.ServiceID=tblservice.ID  where tblbooking.ID=:eid";
$query = $dbh -> prepare($sql);
$query-> bindParam(':eid', $eid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                            <table border="1" style="color: #000; background-color:#fff;" class="table table-bordered table-striped">
                                            <tr>
    <th>Booking Number</th>
    <td><?php  echo $row->BookingID;?></td>
    <th>Client Name</th>
    <td><?php  echo $row->Name;?></td>
  </tr>
  

  <tr>
    <th>Mobile Number</th>
    <td><?php  echo $row->MobileNumber;?></td>
   <th>Email</th>
    <td><?php  echo $row->Email;?></td>
  </tr>
  <tr>
    
    <th>Package Date</th>
    <td><?php  echo $row->EventDate;?></td>
    <th>Event Starting Time</th>
    <td><?php  echo $row->EventStartingtime;?></td>
  </tr>
   <tr>
    
    <th>Package Ending Time</th>
    <td><?php  echo $row->EventEndingtime;?></td>
    <th>Venue Address</th>
    <td><?php  echo $row->VenueAddress;?></td>
  </tr>
  <tr>
    
    <th>Package Type</th>
    <td><?php  echo $row->EventType;?></td>
    <th>AdditionalInformation</th>
    <td><?php  echo $row->AdditionalInformation;?></td>
  </tr>
  <tr>
    
    <th>Service Name</th>
    <td><?php  echo $row->ServiceName;?></td>
    <th>Service Description</th>
    <td><?php  echo $row->SerDes;?></td>
  </tr>
   <tr>
    <th>Service Price</th>
    <td>$<?php  echo $row->ServicePrice;?></td>
    <th>Apply Date</th>
    <td><?php  echo $row->BookingDate;?></td>
  </tr>

  <tr>
    
     <th>Order Final Status</th>

    <td> <?php  $status=$row->Status;
    
if($row->Status=="Approved")
{
  echo "Your Booking has been approved";
}

if($row->Status=="Cancelled")
{
 echo "Your Booking has been cancelled";
}


if($row->Status=="")
{
  echo "Not Response Yet";
}


     ;?></td>
     <th >Admin Remark</th>
    <?php if($row->Status==""){ ?>

                     <td><?php echo "Not Updated Yet"; ?></td>
<?php } else { ?>                  <td><?php  echo htmlentities($row->Status);?>
                  </td>
                  <?php } ?>
  </tr>
  
 
<?php $cnt=$cnt+1;}} ?>

</table> 




			 </div>
		 </div>
		<?php include_once('includes/footer.php');?>
	 </div>
</div>
<!---->

<!---->
</body>
</html>