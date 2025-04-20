<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Online DJ Management System || DJ Services</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="./style/command.css">

    <script
        type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,100,200' rel='stylesheet'
        type='text/css'>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script type="text/javascript" src="js/jquery.fancybox.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Battambang:wght@100;300;400;700;900&family=Dangrek&display=swap"
        rel="stylesheet">
    <script type="text/javascript">
        $(document).ready(function () {
            /*
             *  Simple image gallery. Uses default settings
             */

            $('.fancybox').fancybox();

        });
    </script>

</head>

<style>
    body{
        font-size: 16px;
    }
    /* Main container for event content */
    .event.content {
        padding: 40px 0;
        font-family: "Battambang", system-ui;
    }

    /* Center content */
    .container_s {
        width: 60%;
        margin: 0 auto;
        padding: 0 15px;
    }

    /* Event section */
    .event-main {
        margin-top: 20px;
    }

    /* Event grid wrapper */
    .event-grids {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid #ccc;
        padding: 20px 0;
    }

    /* Individual event grid */
    .event-grid {
        padding: 10px;
        box-sizing: border-box;
    }

    /* Event heading */
    .event-grid .hedding {
        font-size: 22px;
        font-weight: 600;
        color: #333;
        margin-bottom: 10px;
    }

    /* Description text */
    .event-grid.small-text p {
        font-size: 16px;
        color: #555;
        line-height: 1.6;
        margin: 0;
    }

    /* Service price */
    .event-grid.large-text .text {
        font-size: 24px;
        font-weight: 700;
        color: #007bff;
        margin: 0;
    }

    /* Button container */
    .text-button {
        text-align: right;
    }

    ul {
        list-style: none;
    }

    /* Booking button */
    .button.yellow a {
        text-decoration: none;
        background-color: #ffc107;
        color: #000;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        font-weight: 600;
        display: inline-block;
        transition: background-color 0.3s ease;
    }

    .content {
        width: 85%;
        height: auto;
        margin-left: 7%;
        background-color: white;
    }
    .button.yellow a:hover {
        background-color: #e0a800;
    }
    @media (max-width: 1024px) {
        .container_s {
            width: 80%;
        }
    }

    @media (max-width: 768px) {
        .event-grids {
            flex-direction: column;
            text-align: center;
        }

        .event-grid {
            width: 100%;
        }

        .text-button {
            text-align: center;
        }
    }
</style>
<body>
    <?php include_once('includes/header.php'); ?>
    <section>
        <div class="event content">
            <div class="event-main">
                <?php
                $sql = "SELECT * from tblservice";
                $query = $dbh->prepare($sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                $cnt = 1;
                if ($query->rowCount() > 0) {
                    foreach ($results as $row) { ?>
                        <div class="event-grids">
                            <div class="col-md-3 event-grid">
                                <ul>
                                    <li class="hedding"><?php echo htmlentities($row->ServiceName); ?></li>
                                </ul>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="col-md-4 event-grid small-text">
                                <p><?php echo htmlentities($row->SerDes); ?></p>
                            </div>
                            <div class="col-md-2 event-grid large-text">
                                <p class="text" style="color :red;">$ <?php echo htmlentities($row->ServicePrice); ?> USD</p>
                            </div>
                            <div class="col-md-3 event-grid text-button">
                                <ul>
                                    <li class="button yellow"><a href="book-services.php?bookid=<?php echo $row->ID; ?>">Book
                                            Services</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <?php $cnt = $cnt + 1;
                    }
                } ?>
            </div>
            
        </div>
    </section>
    <?php include './includes/footer.php' ?>
    <!---->
</body>
</html>