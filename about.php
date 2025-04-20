<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Online DJ Management System || About Us</title>

<script src="js/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="./style/command.css">
<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Battambang:wght@100;300;400;700;900&family=Dangrek&display=swap" rel="stylesheet">
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
						/* Hover effect for images */
			.img-hover-wrapper {
				display: inline-block; /* Ensure the wrapper fits the image size */
				position: relative;
				transition: all 0.3s ease; /* Smooth transition */
			}

			.img-hover-wrapper img {
				transition: all 0.3s ease; /* Smooth transition for the image */
			}

			/* Add a border on hover */
			.img-hover-wrapper:hover img {
				background:none;
				box-shadow: 0 0 15px rgba(0, 123, 255, 0.5); /* Optional: Add a shadow for a glowing effect */
				transform: scale(1.05); /* Optional: Slightly scale up the image */
			}
            .h-font {
                 font-family: "Moul", serif;
            }
            .lh-base{
                font-family: "Battambang", system-ui;
            }
            .fadeInUp{
                font-family: "Battambang", system-ui;
            }
            .btn-square img {
    width: 20px;
    height: 20px;
    display: inline-block;
}

.btn-square {
    width: 40px;
    height: 40px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: all 0.3s ease-in-out;
}

.btn-square:hover {
    transform: scale(1.1);
}


			
		</style>
</head>

<body>
<!---->
<?php include_once('includes/header.php');?>
<div class="about content">
	 <div class="container"> 		 
		 
		 <?php
	$sql="SELECT * from tblpage where PageType='aboutus'";
	$query = $dbh -> prepare($sql);
	$query->execute();
	$results=$query->fetchAll(PDO::FETCH_OBJ);

	$cnt=1;
	if($query->rowCount() > 0)
	{
	foreach($results as $row)
	{               ?>
	<div class="my-5 px-4">
		<!-- Heading -->
		<h2 class="fw-bold text-center h-font" >អំពីយើង</h2>
		<!-- Horizontal Line -->
		<div class="h-line bg-dark mx-auto mb-3" style="width: 100px; height: 2px;"></div>
		<!-- Paragraph -->
		<p class="text-center mt-3 fs-5 lh-base" style="letter-spacing: 1px;">
			ដំណើរ | កម្សាន្ត Booking Management ត្រូវបានបង្កើតឡើងក្នុងឆ្នាំ 2025 ដោយក្រុមនិស្សិតនៅសកលវិទ្យាល័យភូមិន្ទភ្នំពេញ <br>
			ផ្នែកព័ត៌មានវិទ្យា ដែលពួកយើងសុទ្ធសឹងតែជាអ្នកបំពេញលើការងារ Web Developer ។ យើងផ្តល់ជូននូវមគ្គុទ្ទេសទេសចរណ៍ដែលមាន <br>
			ការបញ្ជាក់សម្រាប់កញ្ចប់ដំណើរកម្សាន្តទេសចរណ៍នៅទៅកាន់ខេត្ត មួយចំនួននៅក្នុង ប្រទេសកម្ពុជា​ ។ អ្នកអាចជ្រើសរើសរវាងមគ្គុទ្ទេសក៍ <br>
			ទេសចរណ៍និយាយភាសាអង់គ្លេស អេស្ប៉ាញ ឬអាល្លឺម៉ង់ ។ យើងមានជំនាញក្នុងដំណើរទេសចរណ៍ណែនាំឯកជនទៅកាន់តំបន់បេតិកភណ្ឌពិភព<br>
			លោករបស់អង្គការយូណេស្កូនៃឧទ្យានបុរាណវិទ្យាអង្គរ និងតំបន់ដំណើរកម្សាន្តជាច្រើនទៀត នៅក្នុងព្រះរាជាណាចក្រកម្ពុជា ។
		</p>
	</div>
	<?php $cnt=$cnt+1;}} ?>
</div>
<!-- About Start -->
<section class="about-section">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- Left Column: Text Content -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-4">លោកអ្នកអាចស្វែងយល់បន្ថែមអំពីការងាររបស់យើង និងសកម្មភាពវប្បធម៌របស់យើង តាមរយៈពួកគាត់បាន ។</h3>
                    <p class="lead">ពួកយើងពិតជាសប្បាយចិត្តណាស់ ក្នុងការបង្ហាញ និងជួយដោះស្រាយបញ្ហាជូនអ្នក សូមអរគុណលោក លោកស្រី ទាំងអស់គ្នាជាពន់ពេកដែលបាន បានធ្វើការជ្រើសរើសយកសេវាកម្មដំណើរកម្សាន្តរបស់ពួកយើង ។</p>
                    <p class="mb-4"><strong style="color:red;"> ចំណាំ ៖ រាល់ការសួរនាំពីបញ្ហានីមួយៗរបស់ អ្នក និងត្រូវបានកត់ត្រា និងត្រួតពិនិត្យយ៉ាងល្អិតល្អន់ដើម្បីធានាថាយើងបានជួយដោះស្រាយជូនលោកអ្នកបានជោគជ័យ</strong></p>
                    
                    <!-- Call to Action and Author Info -->
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="">Join With Team </a>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle flex-shrink-0" src="./img/yangirl1.png" alt="Jhon Doe" style="width: 45px; height: 45px;">
                                <div class="ms-3">
                                    <h6 class="text-primary mb-1">Choem Saro</h6>
                                    <small>Leader</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Image Gallery -->
				<div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
					<div class="row g-4">
						<!-- Main Image -->
						<div class="col-12 text-center">
							<div class="img-hover-wrapper">
								<img class="img-fluid w-75 rounded-circle p-3" src="./img/person2.png" alt="About Us Image 1">
							</div>
						</div>
						<!-- Secondary Images -->
						<div class="col-6 text-start" style="margin-top: -150px;">
							<div class="img-hover-wrapper">
								<img class="img-fluid w-100 rounded-circle  p-3" src="./img/yangirl2.png" alt="About Us Image 2">
							</div>
						</div>
						<div class="col-6 text-end" style="margin-top: -150px;">
							<div class="img-hover-wrapper">
								<img class="img-fluid w-100 rounded-circle p-3" src="./img/person1.png" alt="About Us Image 3">
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</section>
<!-- Team Start -->
<div class="text-center mx-auto  wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h1>សមាជិកក្រុម​</h1>
</div>
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="./img/member/1.png" alt="Team Member">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5>ជឹម សារូ</h5>
                        <p class="text-primary">សមាជិក</p>
                        <div class="team-social text-center">
                            <a class="btn btn-square btn-dark" href="https://web.facebook.com/?_rdc=1&_rdr#" target="_blank" aria-label="Facebook">
                                <img src="./img/member/logofece.png" alt="Facebook Logo" style="width: 40px; height: 20px;">
                            </a>
                            <a class="btn btn-square btn-danger" href="https://www.tiktok.com/@choemsaro2 " target="_blank" aria-label="Twitter">
                                <i class="fab fa-twitter"></i>
                                <img src="./img/member/tiktok.png" alt="Facebook Logo" style="width: 40px; height: 20px;">

                            </a>
                            <a class="btn btn-square btn-info" href="https://telegram.org/" target="_blank" aria-label="Telegram">
                                                <i class="fab fa-telegram-plane"></i>
                                                <img src="./img/member/telegram.png" alt="Facebook Logo" style="width: 40px; height: 20px;">
                                            </a>
                        </div>
                    </div>
                </div>
            </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="./img/member/2.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>ភិន ចាន់សុផល់</h5>
                            <p class="text-primary">អនុប្រធាន</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-dark" href="https://www.facebook.com/share/16EydawqTY/?mibextid=wwXIfr" target="_blank" aria-label="Facebook">
                                    <img src="./img/member/logofece.png" alt="Facebook Logo" style="width: 40px; height: 20px;">
                                </a>
                                <a class="btn btn-square btn-danger" href="https://www.tiktok.com" target="_blank" aria-label="Twitter">
                                    <i class="fab fa-twitter"></i>
                                    <img src="./img/member/tiktok.png" alt="Facebook Logo" style="width: 40px; height: 20px;">

                                </a>
                                <a class="btn btn-square btn-info" href="https://t.me/YuYu_Coding" target="_blank" aria-label="Telegram">
                                    <i class="fab fa-telegram-plane"></i>
                                    <img src="./img/member/telegram.png" alt="Telegram Logo" style="width: 40px; height: 20px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="./img/member/3.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>ជួន សុភក្ត្រា</h5>
                            <p class="text-primary">សមាជិក</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-dark" href=" https://www.facebook.com/share/15DTbMdiz5/?mibextid=wwXIfr" target="_blank" aria-label="Facebook">
                                    <img src="./img/member/logofece.png" alt="Facebook Logo" style="width: 40px; height: 20px;">
                                </a>
                                <a class="btn btn-square btn-danger" href="https://www.tiktok.com " target="_blank" aria-label="Twitter">
                                    <i class="fab fa-twitter"></i>
                                    <img src="./img/member/tiktok.png" alt="Facebook Logo" style="width: 40px; height: 20px;">

                                </a>
                               <a class="btn btn-square btn-info" href="https://t.me/chuonsopheaktra" target="_blank" aria-label="Telegram">
                                    <i class="fab fa-telegram-plane"></i>
                                    <img src="./img/member/telegram.png" alt="Facebook Logo" style="width: 40px; height: 20px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="./img/member/4.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>សារ៉ន សុខហេង</h5>
                            <p class="text-primary">សមាជិក</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-dark" href="https://www.facebook.com/share/18XXEXCgcQ/?mibextid=wwXIfr" target="_blank" aria-label="Facebook">
                                    <img src="./img/member/logofece.png" alt="Facebook Logo" style="width: 40px; height: 20px;">
                                </a>
                                <a class="btn btn-square btn-danger" href="https://www.tiktok.com " target="_blank" aria-label="Twitter">
                                    <i class="fab fa-twitter"></i>
                                    <img src="./img/member/tiktok.png" alt="Facebook Logo" style="width: 40px; height: 20px;">

                                </a>
                               <a class="btn btn-square btn-info" href="https://t.me/Sok_Heng4" target="_blank" aria-label="Telegram">
                                    <i class="fab fa-telegram-plane"></i>
                                    <img src="./img/member/telegram.png" alt="Telegram Logo" style="width: 40px; height: 20px;">
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="./img/member/5.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>ពេស សុក្រី</h5>
                            <p class="text-primary">សមាជិក</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-dark" href="https://www.facebook.com/share/1ACLZmWiT2/" target="_blank" aria-label="Facebook">
                                    <img src="./img/member/logofece.png" alt="Facebook Logo" style="width: 40px; height: 20px;">
                                </a>
                                <a class="btn btn-square btn-danger" href="https://www.tiktok.com" target="_blank" aria-label="Twitter">
                                    <i class="fab fa-twitter"></i>
                                    <img src="./img/member/tiktok.png" alt="Facebook Logo" style="width: 40px; height: 20px;">

                                </a>
                                <a class="btn btn-square btn-info" href="https://t.me/SokryPes" target="_blank" aria-label="Telegram">
                                    <i class="fab fa-telegram-plane"></i>
                                    <img src="./img/member/telegram.png" alt="Telegram Logo" style="width: 40px; height: 20px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="./img/member/6.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>ហាក់ លីថន</h5>
                            <p class="text-primary">សមាជិក</p>
                            <div class="team-social text-center">
                               <a class="btn btn-square btn-dark" href="https://web.facebook.com/?_rdc=1&_rdr#" target="_blank" aria-label="Facebook">
                                    <img src="./img/member/logofece.png" alt="Facebook Logo" style="width: 40px; height: 20px;">
                                </a>
                                <a class="btn btn-square btn-danger" href="https://www.tiktok.com/@choemsaro2 " target="_blank" aria-label="Twitter">
                                    <i class="fab fa-twitter"></i>
                                    <img src="./img/member/tiktok.png" alt="Facebook Logo" style="width: 40px; height: 20px;">

                                </a>
                               <a class="btn btn-square btn-info" href="https://telegram.org/" target="_blank" aria-label="Telegram">
                                    <i class="fab fa-telegram-plane"></i>
                                    <img src="./img/member/telegram.png" alt="Facebook Logo" style="width: 40px; height: 20px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="./img/member/7.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>ខឿន ស្រីនីត</h5>
                            <p class="text-primary">សមាជិក</p>
                            <div class="team-social text-center">
                               <a class="btn btn-square btn-dark" href="https://www.facebook.com/khoeun.sreynith.22665" target="_blank" aria-label="Facebook">
                                    <img src="./img/member/logofece.png" alt="Facebook Logo" style="width: 40px; height: 20px;">
                                </a>
                                <a class="btn btn-square btn-danger" href="https://www.tiktok.com " target="_blank" aria-label="Twitter">
                                    <i class="fab fa-twitter"></i>
                                    <img src="./img/member/tiktok.png" alt="Facebook Logo" style="width: 40px; height: 20px;">
                                </a>
                               <a class="btn btn-square btn-info" href="https://t.me/Nith_34" target="_blank" aria-label="Telegram">
                                    <i class="fab fa-telegram-plane"></i>
                                    <img src="./img/member/telegram.png" alt="Telegram Logo" style="width: 40px; height: 20px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="./img/member/8.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>ធីម រិទ្ធថារ៉ូ</h5>
                            <p class="text-primary">សមាជិក</p>
                            <div class="team-social text-center">
                               <a class="btn btn-square btn-dark" href="https://www.facebook.com/share/15ZZwMEhAS/?mibextid=wwXIfr" target="_blank" aria-label="Facebook">
                                    <img src="./img/member/logofece.png" alt="Facebook Logo" style="width: 40px; height: 20px;">
                                </a>
                                <a class="btn btn-square btn-danger" href="https://www.tiktok.com " target="_blank" aria-label="Twitter">
                                    <i class="fab fa-twitter"></i>
                                    <img src="./img/member/tiktok.png" alt="Facebook Logo" style="width: 40px; height: 20px;">
                                </a>
                               <a class="btn btn-square btn-info" href="https://t.me/thimritharo" target="_blank" aria-label="Telegram">
                                    <i class="fab fa-telegram-plane"></i>
                                    <img src="./img/member/telegram.png" alt="Telegram Logo" style="width: 40px; height: 20px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

<?php include'./includes/footer.php'?>
<!---->

<!---->
</body>
</html>