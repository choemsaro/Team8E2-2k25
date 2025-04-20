<?php session_start();
//error_reporting(0);
include('includes/dbconnection.php');

  

?>
<!DOCTYPE html>
<html>
<head>
<title>Online DJ Management System || Request Status</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
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
    .social-link{
        align-items: center;
        display: flex;
        font-size: 16px;
        font-size: 16px;
        text-decoration: none;

        color: #333;
        padding: 5px 0px;
        transition: color 0.3s;
    }
    .social-link a {
        display: inline-flex;
        align-items: center;
        display: flex;
        gap: 8px;
        /* Space between icon and text */
        font-size: 16px;
        text-decoration: none;
        color: #333;
        padding: 5px 10px;
        transition: color 0.3s;
    }


    .social-link a:hover {
        text-decoration: none;
        color: #007bff;
    }

/* Centering the Form */
.container_request {
    display: flex;
    justify-content: center;
	padding: 30px;
    text-align: center;
	height: auto;
    width: 100%;
}

/* Form Container */
.contact-main {
    width: 100%;
    /* max-width: 900px; */
    height: 350px;
    background: #ffffff;
    border-radius: 10px;
    /* box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1); */
}

/* Breadcrumb Styling */
.breadcrumb {
    background-color: #f8f9fa;
    border-radius: 5px;
}

.breadcrumb a {
    color: #007bff;
    text-decoration: none;
}

.breadcrumb a:hover {
    text-decoration: underline;
}

/* Form Styling */
.contact-left {
    height: 350px;
    background: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

.contact-left ul {
    list-style: none;
    padding: 0;
}

.contact-left ul li {
    margin-bottom: 10px;
    text-align: left;
}

.text-info {
    font-weight: bold;
    color: #333;
}

.contact-left input[type="text"],
.contact-left input[type="submit"] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

/* Submit Button Styling */
.contact-left input[type="submit"] {
    background: #007bff;
    color: white;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
    border: none;
}

.contact-left input[type="submit"]:hover {
    background: #0056b3;
}

/* Table Styling */
.table {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
}

.table th {
    background: #007bff;
    color: white;
    text-align: center;
}

.table td {
    padding: 12px;
    text-align: center;
}

.table-striped tbody tr:nth-of-type(odd) {
    background: #f2f2f2;
}

.table-hover tbody tr:hover {
    background: #e9ecef;
}

/* Responsive Design */
@media (max-width: 768px) {
    .container_request {
        height: auto;
        padding: 30px 15px;
    }
    .contact-main {
        width: 100%;
    }
}
		
</style>
</head>
<body>
<?php include_once('includes/header.php');?>
<!-- 
<ol class="breadcrumb text-center">
            <li><a href="index.php">Home</a></li>
            <li class="active">Request Status</li>
</ol> -->
<br>
<h2 class="text-center">Request Status</h2>
<div class="contact content">
    <div class="container_request">
        <div class="contact-main">
            <div class="contact-grids">
                <div class="col-md-6 contact-left">
                    <form method="post">
                        <ul>
                            <li class="text-dark">Name:</li>
                            <li><input type="text" class="text" name="name" required></li>
                        </ul>
                        <br>
                        <ul>
                            <li class="text-dark">Mobile Number:</li>
                            <li><input type="text" class="text" name="mobnum" required maxlength="10" pattern="[0-9]+"></li>
                        </ul>
                        <br>
                        <input type="submit" name="submit" value="Submit">
                        <br>
                    </form>
                </div>
				<div class="col-md-6 contact-right">
					 	<div class="contact-map">
						<img src="./img/cycle/welcome1.png" class="img-responsive" height="400px" width="1000"  style=" border-radius: 10px;" alt=""/>
						</div>
				 </div>

                <div class="clearfix"></div>

                <?php if (isset($_POST['submit'])) {
                    $mno = $_POST['mobnum'];
                    $fname = $_POST['name'];
                    $sql = "SELECT tblbooking.ID, tblbooking.BookingID, tblbooking.Name, tblbooking.MobileNumber, 
                                   tblbooking.Email, tblbooking.EventDate, tblbooking.EventStartingtime, 
                                   tblbooking.EventEndingtime, tblbooking.VenueAddress, tblbooking.EventType, 
                                   tblbooking.AdditionalInformation, tblbooking.BookingDate, tblbooking.Remark, 
                                   tblbooking.Status, tblbooking.UpdationDate, tblservice.ServiceName, 
                                   tblservice.SerDes, tblservice.ServicePrice 
                            FROM tblbooking 
                            JOIN tblservice ON tblbooking.ServiceID = tblservice.ID  
                            WHERE tblbooking.MobileNumber = :mno AND tblbooking.Name = :fname";
                    
                    $query = $dbh->prepare($sql);
                    $query->bindParam(':mno', $mno, PDO::PARAM_STR);
                    $query->bindParam(':fname', $fname, PDO::PARAM_STR);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);

                    if ($query->rowCount() > 0) { ?>
                        <table border="1" class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                            <tr>
                                <th>Booking Number</th>
                                <th>Client Name</th>
                                <th>Mobile Number</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            <?php foreach ($results as $row) { ?>
                                <tr>
                                    <td><?php echo htmlentities($row->BookingID); ?></td>
                                    <td><?php echo htmlentities($row->Name); ?></td>
                                    <td><?php echo htmlentities($row->MobileNumber); ?></td>
                                    <td><?php echo htmlentities($row->Email); ?></td>
                                    <td>
                                        <a href="request-details.php?bid=<?php echo htmlentities($row->ID); ?>&bookingid=<?php echo htmlentities($row->BookingID); ?>" class="btn btn-info">
                                            View Details
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    <?php } else { ?>
                        <hr />
                        <h3 style="color:red">No Record found</h3>
                    <?php }
                } ?>
            </div>
        </div>
    </div>
</div>
<!---->
<?php include'./includes/footer.php'?>
</body>
</html>