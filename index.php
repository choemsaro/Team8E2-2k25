<!DOCTYPE html>
<html>

<head>
    <title>Cambodai Tour System||Home Page</title>
    <!-- jQuery (Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script
        type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link rel="stylesheet" href="./style/command.css">
    <link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./style/productlist.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<style>
    .social-links a {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 16px;
        text-decoration: none;
        color: #333;
        padding: 5px 10px;
        transition: color 0.3s;
    }

    .social-links a:hover {
        color: #007bff;
    }
</style>

<body>
    <!---->
    <?php include_once('includes/header.php'); ?>
    <!---->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                manualControls: '#slider3-pager',
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const activeTab = document.querySelector(".nav-pills .active");
            if (activeTab) {
                activeTab.scrollIntoView({ behavior: 'smooth', inline: 'center' });
            }
        });
    </script>


    <!-- <div class="ratio ratio-21x9">
        <video controls>
            <source src="./img/video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div> -->
    <div class="ratio ratio-21x9" style="width: 90%; height: auto; margin-left: 5%;">
        <iframe 
            src="https://www.youtube.com/embed/gg7VTE7gGHw" 
            title="YouTube video" 
            allowfullscreen>
        </iframe>
    </div>


    <section class="dream-section">
        <div class="container">
            <div class="dream-content">
                <h1>សូមធ្វើការស្វែងរកជាមួយដំណើរកម្សាន្តដែល លោកអ្នកចង់ទៅកាន់ទីនោះជាមួយនិងសេវាកម្ម
                    ខាងដំណើរកម្សាន្តយើងខ្ញុំ </h1>
                <p>ទាំងអស់នេះគឺជាអនុស្សាវរីយ៌ជាច្រើនដែល យើងបានថត ជាមួយក្រុមអតិថិជន និងការជូនពួកគាត់ដើរកម្សាន្តយ៉ាងសប្បាយ
                    រីករាយ​ និងការហូបអាហារជុំគ្នាផងដែល</p>
            </div>
        </div>
    </section>
    <section class="container my-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <!-- Card 1 -->
            <div class="col">
                <div class="card h-100 bg-body-secondary position-relative">
                    <img src="./img/eating.png" class="card-img-top" alt="Angkor Wat">
                    <div class="card-body">
                        <h5 class="card-title">ហូបអីជុំគ្នា</h5>
                        <p class="card-text">ទៅញាំអីជុំគ្នាជាមួយមិត្តភក្តិនៅទឹកដីសៀមរាបនិងបង្កើតអនុវស្សាយ៍ម្អូបខ្មែរឆ្ងាញ់គ្រប់មុខរស់ជាតិប្លែកអ្នកទៅសៀមរាបកុំភ្លេចទៅញាំ</p>
                        <a href="#" class="stretched-link btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col">
                <div class="card h-100 bg-body-secondary position-relative">
                    <img src="./img/cycle/1.png" class="card-img-top" alt="Bayon Temple">
                    <div class="card-body">
                        <h5 class="card-title">ជិះកង់</h5>
                        <p class="card-text">កន្លែងជិះកង់នេះក័សប្បាយដែរសម្រាប់បង្កើតអនុស្សារីយ៏ខ្ញុំទៅរួចហើយrelaxខ្លាំងណាស់ recomments</p>
                        <a href="#" class="stretched-link btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
                <div class="card h-100 bg-body-secondary position-relative">
                    <img src="./img/pup1.png" class="card-img-top" alt="Ta Prohm" style="height: 70%;">
                    <div class="card-body">
                        <h5 class="card-title">អង្គរវត្ត​</h5>
                        <p class="card-text">បើកន្លែងPub Street នេះRate​អោយ 10/10ម៉ងកន្លែងដើរលេងច្រើនហើយមានកន្លែងញាំអីច្រើន តម្លែសមរម្យទៀត
                        </p>
                        <a href="#" class="stretched-link btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col">
                <div class="card h-100 bg-body-secondary position-relative">
                    <img src="./img/cycle/2.png" class="card-img-top" alt="Bayon Temple">
                    <div class="card-body">
                        <h5 class="card-title">ថតរូបជុំ</h5>
                        <p class="card-text">សម្រាប់អ្នកដែលTripទៅជាមួយមិត្តភក្តិកុំរំលងកន្លែងមួយនេះអោយសោះបានទាំងកម្រងរូបភាពជុំគ្នាស្អាតៗណាស់ទុកជាអនុស្សាយ៍</p>
                        <a href="#" class="stretched-link btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col">
                <div class="card h-100 bg-body-secondary position-relative">
                    <img src="./img/cycle/5.png" class="card-img-top" alt="Phnom Penh" style="height: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">ទិដ្ឋភាពទាំងស្រុងពេលថ្ងៃរៀបលិច</h5>
                        <p class="card-text">សម្រាប់អ្នកទៅសៀបរាបមិនដែលភ្លេចទេកន្លែងនេះមួយថ្ងៃលិចចំកំពូលប្រាសាទអេមខ្លាំងណាស់ខ្ញុំទៅពេលណាក៍ទៅលេងដែរ.
                        </p>
                        <a href="#" class="stretched-link btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col">
                <div class="card h-100 bg-body-secondary position-relative">
                    <img src="./img/cycle/4.png" class="card-img-top" alt="Siem Reap">
                    <div class="card-body">
                        <h5 class="card-title">ដើរកម្សាន្ត</h5>
                        <p class="card-text">បើកន្លែងPub Street នេះRate​អោយ 10/10ម៉ងកន្លែងដើរលេងច្រើនហើយមានកន្លែងញាំអីច្រើន តម្លែសមរម្យទៀត</p>
                        <a href="#" class="stretched-link btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property List Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="mb-3">កញ្ចប់ធ្វើដំណើរ</h1>
                        <p>សម្រាប់អ្នកទាំងអស់គ្នាដែលមានបំណងចង់ទៅលេងទឹកដីសៀបរាបអត់ទៅលេងទីណាអាចសាកមើលជាមួយកញ្ចប់ធ្វើដំណើរយើងខ្ញុំបាន
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">ធម្មតា</a>
                        </li>
                         
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">VIP</a>
                        </li>
                        <li class="nav-item me-0">
                            <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">បញ្ចុះតម្លៃ</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="./img/cycle/2.png" alt=""></a>
                                        <div
                                            class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            25%</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Appartment</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$40</h5>
                                        <h5 class="text-dark" style="font-size: 17px;">ថតរូបជុំគ្នានៅក្រុងសៀមរាប</h5>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, Seam Reap
                                            ,Cambodia</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>100k</small>
                                        <small class="flex-fill text-center border-end py-2" onclick="openGoogleMaps()">
                                            <i class="fa fa-bed text-primary me-2"></i> Location
                                        </small>
                                        <script>
                                            function openGoogleMaps() {
                                                if (navigator.geolocation) {
                                                    navigator.geolocation.getCurrentPosition(function (position) {
                                                        var lat = position.coords.latitude;
                                                        var lng = position.coords.longitude;
                                                        window.open(`https://www.google.com/maps/place/%E1%9E%80%E1%9E%93%E1%9F%92%E1%9E%9B%E1%9F%82%E1%9E%84%E1%9E%98%E1%9F%81%E1%9E%B8%E1%9E%9B%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9B%E1%9E%B7%E1%9E%85/@13.3632533,103.8538281,847m/data=!3m2!1e3!4b1!4m6!3m5!1s0x31101700556db363:0x4f3ec8622a7ef66a!8m2!3d13.3632533!4d103.856403!16s%2Fg%2F11y494mwhc?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D=${lat},${lng}`, '_blank');
                                                    }, function (error) {
                                                        alert('Unable to retrieve your location');
                                                    });
                                                } else {
                                                    alert('Geolocation is not supported by your browser.');
                                                }
                                            }
                                        </script>
                                       <a href="view-detail3.php" class="flex-fill text-center border-end py-2 text-decoration-none">
                                            <small class="flex-fill text-center">
                                                <i class="fa fa-bath text-primary me-2"></i>View
                                            </small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="./img/cycle/1.png" alt=""></a>
                                        <div
                                            class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            25%</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Villa</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$40</h5>
                                        <h5 class="text-dark" style="font-size: 17px;">ជិះកង់លេងក្នុងអង្គរវត្ត</h5>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>1342 Street, Seam Reap
                                            , Cambodia</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>10.1k</small>
                                        <small class="flex-fill text-center border-end py-2" onclick="openGoogleMaps()">
                                            <i class="fa fa-bed text-primary me-2"></i> Location
                                        </small>
                                        <script>
                                            function openGoogleMaps() {
                                                if (navigator.geolocation) {
                                                    navigator.geolocation.getCurrentPosition(function (position) {
                                                        var lat = position.coords.latitude;
                                                        var lng = position.coords.longitude;
                                                        window.open(`https://www.google.com/maps/place/%E1%9E%80%E1%9E%93%E1%9F%92%E1%9E%9B%E1%9F%82%E1%9E%84%E1%9E%98%E1%9F%81%E1%9E%B8%E1%9E%9B%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9B%E1%9E%B7%E1%9E%85/@13.3632533,103.8538281,847m/data=!3m2!1e3!4b1!4m6!3m5!1s0x31101700556db363:0x4f3ec8622a7ef66a!8m2!3d13.3632533!4d103.856403!16s%2Fg%2F11y494mwhc?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D=${lat},${lng}`, '_blank');
                                                    }, function (error) {
                                                        alert('Unable to retrieve your location');
                                                    });
                                                } else {
                                                    alert('Geolocation is not supported by your browser.');
                                                }
                                            }
                                        </script>
                                        <a href="view-detail1.php" class="flex-fill text-center border-end py-2 text-decoration-none">
                                            <small class="flex-fill text-center">
                                                <i class="fa fa-bath text-primary me-2"></i>View
                                            </small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="./img/cycle/3.png" alt=""></a>
                                        <div
                                            class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            15%</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Office</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$50</h5>
                                        <h5 class="text-dark" style="font-size: 17px;">ទៅមើលថ្ងៃលិចនៅក្នុងអង្គវត្ត</h5>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, Seam Reap,
                                            Cambodia</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1.1k</small>
                                        <small class="flex-fill text-center border-end py-2" onclick="openGoogleMaps()">
                                            <i class="fa fa-bed text-primary me-2"></i> Location
                                        </small>

                                        <script>
                                            function openGoogleMaps() {
                                                if (navigator.geolocation) {
                                                    navigator.geolocation.getCurrentPosition(function (position) {
                                                        var lat = position.coords.latitude;
                                                        var lng = position.coords.longitude;
                                                        window.open(`https://www.google.com/maps/place/%E1%9E%80%E1%9E%93%E1%9F%92%E1%9E%9B%E1%9F%82%E1%9E%84%E1%9E%98%E1%9F%81%E1%9E%B8%E1%9E%9B%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9B%E1%9E%B7%E1%9E%85/@13.3632533,103.8538281,847m/data=!3m2!1e3!4b1!4m6!3m5!1s0x31101700556db363:0x4f3ec8622a7ef66a!8m2!3d13.3632533!4d103.856403!16s%2Fg%2F11y494mwhc?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D=${lat},${lng}`, '_blank');
                                                    }, function (error) {
                                                        alert('Unable to retrieve your location');
                                                    });
                                                } else {
                                                    alert('Geolocation is not supported by your browser.');
                                                }
                                            }
                                        </script>
                                        <a href="view-detail2.php" class="flex-fill text-center border-end py-2 text-decoration-none">
                                            <small class="flex-fill text-center">
                                                <i class="fa fa-bath text-primary me-2"></i>View
                                            </small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="./img/cycle/4.png" alt=""></a>
                                        <div
                                            class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            15%</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Building</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$35</h5>
                                        <h5 class="text-dark" style="font-size: 17px;">ដើរលេងPub Street</h5>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>3002 Street, Seam Reap
                                            ,Cambodia</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>10k</small>
                                        <small class="flex-fill text-center border-end py-2" onclick="openGoogleMaps()">
                                            <i class="fa fa-bed text-primary me-2"></i> Location
                                        </small>

                                        <script>
                                            function openGoogleMaps() {
                                                if (navigator.geolocation) {
                                                    navigator.geolocation.getCurrentPosition(function (position) {
                                                        var lat = position.coords.latitude;
                                                        var lng = position.coords.longitude;
                                                        window.open(`https://www.google.com/maps/place/%E1%9E%80%E1%9E%93%E1%9F%92%E1%9E%9B%E1%9F%82%E1%9E%84%E1%9E%98%E1%9F%81%E1%9E%B8%E1%9E%9B%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9B%E1%9E%B7%E1%9E%85/@13.3632533,103.8538281,847m/data=!3m2!1e3!4b1!4m6!3m5!1s0x31101700556db363:0x4f3ec8622a7ef66a!8m2!3d13.3632533!4d103.856403!16s%2Fg%2F11y494mwhc?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D=${lat},${lng}`, '_blank');
                                                    }, function (error) {
                                                        alert('Unable to retrieve your location');
                                                    });
                                                } else {
                                                    alert('Geolocation is not supported by your browser.');
                                                }
                                            }
                                        </script>
                                        <a href="view-detail3.php" class="flex-fill text-center border-end py-2 text-decoration-none">
                                            <small class="flex-fill text-center">
                                                <i class="fa fa-bath text-primary me-2"></i>View
                                            </small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="./img/cycle/1.png" alt=""></a>
                                        <div
                                            class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            25%</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Home</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$55</h5>
                                        <h5 class="d-block h5 mb-2" href="">ជិះកង់លេងក្នុងអង្គរវត្ត</h5>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>143 Street, seam reap,
                                            Cambodia</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>3.3k</small>
                                        <small class="flex-fill text-center border-end py-2" onclick="openGoogleMaps()">
                                            <i class="fa fa-bed text-primary me-2"></i> Location
                                        </small>

                                        <script>
                                            function openGoogleMaps() {
                                                if (navigator.geolocation) {
                                                    navigator.geolocation.getCurrentPosition(function (position) {
                                                        var lat = position.coords.latitude;
                                                        var lng = position.coords.longitude;
                                                        window.open(`https://www.google.com/maps/place/%E1%9E%80%E1%9E%93%E1%9F%92%E1%9E%9B%E1%9F%82%E1%9E%84%E1%9E%98%E1%9F%81%E1%9E%B8%E1%9E%9B%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9B%E1%9E%B7%E1%9E%85/@13.3632533,103.8538281,847m/data=!3m2!1e3!4b1!4m6!3m5!1s0x31101700556db363:0x4f3ec8622a7ef66a!8m2!3d13.3632533!4d103.856403!16s%2Fg%2F11y494mwhc?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D=${lat},${lng}`, '_blank');
                                                    }, function (error) {
                                                        alert('Unable to retrieve your location');
                                                    });
                                                } else {
                                                    alert('Geolocation is not supported by your browser.');
                                                }
                                            }
                                        </script>
                                       <a href="view-detail4.php" class="flex-fill text-center border-end py-2 text-decoration-none">
                                            <small class="flex-fill text-center">
                                                <i class="fa fa-bath text-primary me-2"></i>View
                                            </small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="./img/cycle/3.png" alt=""></a>
                                        <div
                                            class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            25%</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Shop</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$45</h5>
                                        <h5 class="d-block h5 mb-2" href="">ទៅមើលថ្ងៃលិចនៅក្នុងអង្គវត្ត</h5>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, Seam reap,
                                            Cambodia</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>3k</small>
                                        <small class="flex-fill text-center border-end py-2" onclick="openGoogleMaps()">
                                            <i class="fa fa-bed text-primary me-2"></i> Location
                                        </small>

                                        <script>
                                            function openGoogleMaps() {
                                                if (navigator.geolocation) {
                                                    navigator.geolocation.getCurrentPosition(function (position) {
                                                        var lat = position.coords.latitude;
                                                        var lng = position.coords.longitude;
                                                        window.open(`https://www.google.com/maps/place/%E1%9E%80%E1%9E%93%E1%9F%92%E1%9E%9B%E1%9F%82%E1%9E%84%E1%9E%98%E1%9F%81%E1%9E%B8%E1%9E%9B%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9B%E1%9E%B7%E1%9E%85/@13.3632533,103.8538281,847m/data=!3m2!1e3!4b1!4m6!3m5!1s0x31101700556db363:0x4f3ec8622a7ef66a!8m2!3d13.3632533!4d103.856403!16s%2Fg%2F11y494mwhc?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D=${lat},${lng}`, '_blank');
                                                    }, function (error) {
                                                        alert('Unable to retrieve your location');
                                                    });
                                                } else {
                                                    alert('Geolocation is not supported by your browser.');
                                                }
                                            }
                                        </script> 
                                        <a href="view-detail.php" class="flex-fill text-center border-end py-2 text-decoration-none">
                                            <small class="flex-fill text-center">
                                                <i class="fa fa-bath text-primary me-2"></i>View
                                            </small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-1" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="./img/cycle/2.png" alt=""></a>
                                        <div
                                            class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            For Sell</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Appartment</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$50</h5>
                                        <h5 class="d-block h5 mb-2" href="">ថតរូបអនុវស្សាយ៏ជុំគ្នា</h5>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, Seam Reap,
                                            Cambodia</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>2.1k</small>
                                        <small class="flex-fill text-center border-end py-2" onclick="openGoogleMaps()">
                                            <i class="fa fa-bed text-primary me-2"></i> Location
                                        </small>
                                        <script>
                                            function openGoogleMaps() {
                                                if (navigator.geolocation) {
                                                    navigator.geolocation.getCurrentPosition(function (position) {
                                                        var lat = position.coords.latitude;
                                                        var lng = position.coords.longitude;
                                                        window.open(`https://www.google.com/maps/place/%E1%9E%80%E1%9E%93%E1%9F%92%E1%9E%9B%E1%9F%82%E1%9E%84%E1%9E%98%E1%9F%81%E1%9E%B8%E1%9E%9B%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9B%E1%9E%B7%E1%9E%85/@13.3632533,103.8538281,847m/data=!3m2!1e3!4b1!4m6!3m5!1s0x31101700556db363:0x4f3ec8622a7ef66a!8m2!3d13.3632533!4d103.856403!16s%2Fg%2F11y494mwhc?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D=${lat},${lng}`, '_blank');
                                                    }, function (error) {
                                                        alert('Unable to retrieve your location');
                                                    });
                                                } else {
                                                    alert('Geolocation is not supported by your browser.');
                                                }
                                            }
                                        </script> <a href="view-detail1.php" class="flex-fill text-center border-end py-2 text-decoration-none">
                                            <small class="flex-fill text-center">
                                                <i class="fa fa-bath text-primary me-2"></i>View
                                            </small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="./img/cycle/1.png" alt=""></a>
                                        <div
                                            class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            For Rent</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Villa</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$60</h5>
                                        <h5 class="d-block h5 mb-2" href="">ជិះកង់លេងក្នុងអង្គរវត្ត</h5>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, Seam Reap,
                                            Cambodia</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1.3k</small>
                                        <small class="flex-fill text-center border-end py-2" onclick="openGoogleMaps()">
                                            <i class="fa fa-bed text-primary me-2"></i> Location
                                        </small>

                                        <script>
                                            function openGoogleMaps() {
                                                if (navigator.geolocation) {
                                                    navigator.geolocation.getCurrentPosition(function (position) {
                                                        var lat = position.coords.latitude;
                                                        var lng = position.coords.longitude;
                                                        window.open(`https://www.google.com/maps/place/%E1%9E%80%E1%9E%93%E1%9F%92%E1%9E%9B%E1%9F%82%E1%9E%84%E1%9E%98%E1%9F%81%E1%9E%B8%E1%9E%9B%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9B%E1%9E%B7%E1%9E%85/@13.3632533,103.8538281,847m/data=!3m2!1e3!4b1!4m6!3m5!1s0x31101700556db363:0x4f3ec8622a7ef66a!8m2!3d13.3632533!4d103.856403!16s%2Fg%2F11y494mwhc?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D=${lat},${lng}`, '_blank');
                                                    }, function (error) {
                                                        alert('Unable to retrieve your location');
                                                    });
                                                } else {
                                                    alert('Geolocation is not supported by your browser.');
                                                }
                                            }
                                        </script> <a href="view-detail2.php" class="flex-fill text-center border-end py-2 text-decoration-none">
                                            <small class="flex-fill text-center">
                                                <i class="fa fa-bath text-primary me-2"></i>View
                                            </small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="./img/cycle/3.png" alt=""></a>
                                        <div
                                            class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            For Sell</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Office</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$55</h5>
                                        <h5 class="d-block h5 mb-2" href="">ជិះកង់លេងក្នុងអង្គរវត្ត</h5>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, Seam Reap,
                                            Cambodia</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>10k</small>
                                        <small class="flex-fill text-center border-end py-2" onclick="openGoogleMaps()">
                                            <i class="fa fa-bed text-primary me-2"></i> Location
                                        </small>

                                        <script>
                                            function openGoogleMaps() {
                                                if (navigator.geolocation) {
                                                    navigator.geolocation.getCurrentPosition(function (position) {
                                                        var lat = position.coords.latitude;
                                                        var lng = position.coords.longitude;
                                                        window.open(`https://www.google.com/maps/place/%E1%9E%80%E1%9E%93%E1%9F%92%E1%9E%9B%E1%9F%82%E1%9E%84%E1%9E%98%E1%9F%81%E1%9E%B8%E1%9E%9B%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9B%E1%9E%B7%E1%9E%85/@13.3632533,103.8538281,847m/data=!3m2!1e3!4b1!4m6!3m5!1s0x31101700556db363:0x4f3ec8622a7ef66a!8m2!3d13.3632533!4d103.856403!16s%2Fg%2F11y494mwhc?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D=${lat},${lng}`, '_blank');
                                                    }, function (error) {
                                                        alert('Unable to retrieve your location');
                                                    });
                                                } else {
                                                    alert('Geolocation is not supported by your browser.');
                                                }
                                            }
                                        </script> <a href="view-detail3.php" class="flex-fill text-center border-end py-2 text-decoration-none">
                                            <small class="flex-fill text-center">
                                                <i class="fa fa-bath text-primary me-2"></i>View
                                            </small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="./img/cycle/4.png" alt=""></a>
                                        <div
                                            class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            For Rent</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Building</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$50</h5>
                                        <h5 class="d-block h5 mb-2" href="">ជិះកង់លេងក្នុងអង្គរវត្ត</h5>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, seam reap ,
                                            Cambodia</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>4.01k</small>
                                        <small class="flex-fill text-center border-end py-2" onclick="openGoogleMaps()">
                                            <i class="fa fa-bed text-primary me-2"></i> Location
                                        </small>

                                        <script>
                                            function openGoogleMaps() {
                                                if (navigator.geolocation) {
                                                    navigator.geolocation.getCurrentPosition(function (position) {
                                                        var lat = position.coords.latitude;
                                                        var lng = position.coords.longitude;
                                                        window.open(`https://www.google.com/maps/place/%E1%9E%80%E1%9E%93%E1%9F%92%E1%9E%9B%E1%9F%82%E1%9E%84%E1%9E%98%E1%9F%81%E1%9E%B8%E1%9E%9B%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9B%E1%9E%B7%E1%9E%85/@13.3632533,103.8538281,847m/data=!3m2!1e3!4b1!4m6!3m5!1s0x31101700556db363:0x4f3ec8622a7ef66a!8m2!3d13.3632533!4d103.856403!16s%2Fg%2F11y494mwhc?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D=${lat},${lng}`, '_blank');
                                                    }, function (error) {
                                                        alert('Unable to retrieve your location');
                                                    });
                                                } else {
                                                    alert('Geolocation is not supported by your browser.');
                                                }
                                            }
                                        </script> <a href="view-detail4.php" class="flex-fill text-center border-end py-2 text-decoration-none">
                                            <small class="flex-fill text-center">
                                                <i class="fa fa-bath text-primary me-2"></i>View
                                            </small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="./img/cycle/1.png" alt=""></a>
                                        <div
                                            class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            For Sell</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Home</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$45</h5>
                                        <h5 class="d-block h5 mb-2" href="">ថតរូបអនុវស្សាយ៏ជុំគ្នា</h5>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>7k</small>
                                        <small class="flex-fill text-center border-end py-2" onclick="openGoogleMaps()">
                                            <i class="fa fa-bed text-primary me-2"></i> Location
                                        </small>

                                        <script>
                                            function openGoogleMaps() {
                                                if (navigator.geolocation) {
                                                    navigator.geolocation.getCurrentPosition(function (position) {
                                                        var lat = position.coords.latitude;
                                                        var lng = position.coords.longitude;
                                                        window.open(`https://www.google.com/maps/place/%E1%9E%80%E1%9E%93%E1%9F%92%E1%9E%9B%E1%9F%82%E1%9E%84%E1%9E%98%E1%9F%81%E1%9E%B8%E1%9E%9B%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9B%E1%9E%B7%E1%9E%85/@13.3632533,103.8538281,847m/data=!3m2!1e3!4b1!4m6!3m5!1s0x31101700556db363:0x4f3ec8622a7ef66a!8m2!3d13.3632533!4d103.856403!16s%2Fg%2F11y494mwhc?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D=${lat},${lng}`, '_blank');
                                                    }, function (error) {
                                                        alert('Unable to retrieve your location');
                                                    });
                                                } else {
                                                    alert('Geolocation is not supported by your browser.');
                                                }
                                            }
                                        </script> <a href="view-detail.php" class="flex-fill text-center border-end py-2 text-decoration-none">
                                            <small class="flex-fill text-center">
                                                <i class="fa fa-bath text-primary me-2"></i>View
                                            </small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="./img/cycle/3.png" alt=""></a>
                                        <div
                                            class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            For Rent</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Shop</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$70</h5>
                                        <h5 class="d-block h5 mb-2" href="">ទៅមើលថ្ងៃលិចនៅក្នុងអង្គវត្ត</h5>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, seam reap
                                        </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1.9k</small>
                                        <small class="flex-fill text-center border-end py-2" onclick="openGoogleMaps()">
                                            <i class="fa fa-bed text-primary me-2"></i> Location
                                        </small>

                                        <script>
                                            function openGoogleMaps() {
                                                if (navigator.geolocation) {
                                                    navigator.geolocation.getCurrentPosition(function (position) {
                                                        var lat = position.coords.latitude;
                                                        var lng = position.coords.longitude;
                                                        window.open(`https://www.google.com/maps/place/%E1%9E%80%E1%9E%93%E1%9F%92%E1%9E%9B%E1%9F%82%E1%9E%84%E1%9E%98%E1%9F%81%E1%9E%B8%E1%9E%9B%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9B%E1%9E%B7%E1%9E%85/@13.3632533,103.8538281,847m/data=!3m2!1e3!4b1!4m6!3m5!1s0x31101700556db363:0x4f3ec8622a7ef66a!8m2!3d13.3632533!4d103.856403!16s%2Fg%2F11y494mwhc?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D=${lat},${lng}`, '_blank');
                                                    }, function (error) {
                                                        alert('Unable to retrieve your location');
                                                    });
                                                } else {
                                                    alert('Geolocation is not supported by your browser.');
                                                }
                                            }
                                        </script> <a href="view-detail1.php" class="flex-fill text-center border-end py-2 text-decoration-none">
                                            <small class="flex-fill text-center">
                                                <i class="fa fa-bath text-primary me-2"></i>View
                                            </small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="./img/cycle/2.png" alt=""></a>
                                        <div
                                            class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            VIP</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Appartment</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$80</h5>
                                        <h5 class="d-block h5 mb-2" href="">ថតរូបអនុវស្សាយ៏ជុំគ្នា</h5>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, Seam Reap,
                                            Cambodia</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>2.0k</small>
                                        <small class="flex-fill text-center border-end py-2" onclick="openGoogleMaps()">
                                            <i class="fa fa-bed text-primary me-2"></i> Location
                                        </small>

                                        <script>
                                            function openGoogleMaps() {
                                                if (navigator.geolocation) {
                                                    navigator.geolocation.getCurrentPosition(function (position) {
                                                        var lat = position.coords.latitude;
                                                        var lng = position.coords.longitude;
                                                        window.open(`https://www.google.com/maps/place/%E1%9E%80%E1%9E%93%E1%9F%92%E1%9E%9B%E1%9F%82%E1%9E%84%E1%9E%98%E1%9F%81%E1%9E%B8%E1%9E%9B%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9B%E1%9E%B7%E1%9E%85/@13.3632533,103.8538281,847m/data=!3m2!1e3!4b1!4m6!3m5!1s0x31101700556db363:0x4f3ec8622a7ef66a!8m2!3d13.3632533!4d103.856403!16s%2Fg%2F11y494mwhc?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D=${lat},${lng}`, '_blank');
                                                    }, function (error) {
                                                        alert('Unable to retrieve your location');
                                                    });
                                                } else {
                                                    alert('Geolocation is not supported by your browser.');
                                                }
                                            }
                                        </script> <a href="view-detail2.php" class="flex-fill text-center border-end py-2 text-decoration-none">
                                            <small class="flex-fill text-center">
                                                <i class="fa fa-bath text-primary me-2"></i>View
                                            </small>
                                        </a>
                                    </div>
                                </div>
                            </div>


                            
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="./img/cycle/1.png" alt=""></a>
                                        <div
                                            class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            VIP</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Villa</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$80</h5>
                                        <h5 class="d-block h5 mb-2" href="">ជិះកង់លេងក្នុងអង្គរវត្ត</h5>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, Seam Reap,
                                            Cambodia</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>21k</small>
                                        <small class="flex-fill text-center border-end py-2" onclick="openGoogleMaps()">
                                            <i class="fa fa-bed text-primary me-2"></i> Location
                                        </small>

                                        <script>
                                            function openGoogleMaps() {
                                                if (navigator.geolocation) {
                                                    navigator.geolocation.getCurrentPosition(function (position) {
                                                        var lat = position.coords.latitude;
                                                        var lng = position.coords.longitude;
                                                        window.open(`https://www.google.com/maps/place/%E1%9E%80%E1%9E%93%E1%9F%92%E1%9E%9B%E1%9F%82%E1%9E%84%E1%9E%98%E1%9F%81%E1%9E%B8%E1%9E%9B%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9B%E1%9E%B7%E1%9E%85/@13.3632533,103.8538281,847m/data=!3m2!1e3!4b1!4m6!3m5!1s0x31101700556db363:0x4f3ec8622a7ef66a!8m2!3d13.3632533!4d103.856403!16s%2Fg%2F11y494mwhc?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D=${lat},${lng}`, '_blank');
                                                    }, function (error) {
                                                        alert('Unable to retrieve your location');
                                                    });
                                                } else {
                                                    alert('Geolocation is not supported by your browser.');
                                                }
                                            }
                                        </script><a href="view-detail3.php" class="flex-fill text-center border-end py-2 text-decoration-none">
                                            <small class="flex-fill text-center">
                                                <i class="fa fa-bath text-primary me-2"></i>View
                                            </small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="./img/cycle/3.png" alt=""></a>
                                        <div
                                            class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            VIP</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Office</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$105</h5>
                                        <h5 class="d-block h5 mb-2" href="">ជិះកង់លេងក្នុងអង្គរវត្ត</h5>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, Seam Reap,
                                            Cambodia</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>2.1k</small>
                                        <small class="flex-fill text-center border-end py-2" onclick="openGoogleMaps()">
                                            <i class="fa fa-bed text-primary me-2"></i> Location
                                        </small>

                                        <script>
                                            function openGoogleMaps() {
                                                if (navigator.geolocation) {
                                                    navigator.geolocation.getCurrentPosition(function (position) {
                                                        var lat = position.coords.latitude;
                                                        var lng = position.coords.longitude;
                                                        window.open(`https://www.google.com/maps/place/%E1%9E%80%E1%9E%93%E1%9F%92%E1%9E%9B%E1%9F%82%E1%9E%84%E1%9E%98%E1%9F%81%E1%9E%B8%E1%9E%9B%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9B%E1%9E%B7%E1%9E%85/@13.3632533,103.8538281,847m/data=!3m2!1e3!4b1!4m6!3m5!1s0x31101700556db363:0x4f3ec8622a7ef66a!8m2!3d13.3632533!4d103.856403!16s%2Fg%2F11y494mwhc?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D=${lat},${lng}`, '_blank');
                                                    }, function (error) {
                                                        alert('Unable to retrieve your location');
                                                    });
                                                } else {
                                                    alert('Geolocation is not supported by your browser.');
                                                }
                                            }
                                        </script>
                                       <a href="view-detail4.php" class="flex-fill text-center border-end py-2 text-decoration-none">
                                            <small class="flex-fill text-center">
                                                <i class="fa fa-bath text-primary me-2"></i>View
                                            </small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="./img/cycle/4.png" alt=""></a>
                                        <div
                                            class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            VIP</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Building</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$130</h5>
                                        <h5 class="d-block h5 mb-2" href="">ជិះកង់លេងក្នុងអង្គរវត្ត</h5>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, seam reap ,
                                            Cambodia</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>3.1k</small>
                                        <small class="flex-fill text-center border-end py-2" onclick="openGoogleMaps()">
                                            <i class="fa fa-bed text-primary me-2"></i> Location
                                        </small>

                                        <script>
                                            function openGoogleMaps() {
                                                if (navigator.geolocation) {
                                                    navigator.geolocation.getCurrentPosition(function (position) {
                                                        var lat = position.coords.latitude;
                                                        var lng = position.coords.longitude;
                                                        window.open(`https://www.google.com/maps/place/%E1%9E%80%E1%9E%93%E1%9F%92%E1%9E%9B%E1%9F%82%E1%9E%84%E1%9E%98%E1%9F%81%E1%9E%B8%E1%9E%9B%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9B%E1%9E%B7%E1%9E%85/@13.3632533,103.8538281,847m/data=!3m2!1e3!4b1!4m6!3m5!1s0x31101700556db363:0x4f3ec8622a7ef66a!8m2!3d13.3632533!4d103.856403!16s%2Fg%2F11y494mwhc?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D=${lat},${lng}`, '_blank');
                                                    }, function (error) {
                                                        alert('Unable to retrieve your location');
                                                    });
                                                } else {
                                                    alert('Geolocation is not supported by your browser.');
                                                }
                                            }
                                        </script>
                                       <a href="view-detail.php" class="flex-fill text-center border-end py-2 text-decoration-none">
                                            <small class="flex-fill text-center">
                                                <i class="fa fa-bath text-primary me-2"></i>View
                                            </small>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="./img/cycle/1.png" alt=""></a>
                                        <div
                                            class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            VIP</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Home</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$120</h5>
                                        <h5 class="d-block h5 mb-2" href="">ថតរូបអនុវស្សាយ៏ជុំគ្នា</h5>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, Seam Reap,
                                            Cambodia</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1k</small>
                                        <!-- <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>Location</small> -->
                                        <!-- <a href="https://www.google.com/maps/place/KrongSiemReap+Angkor/@13.3625718,103.8513923,847m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3110175dfaab38fb:0x49f782a12d1b05e4!8m2!3d13.3625718!4d103.8562632!16s%2Fg%2F11y3srn5t0?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D" target="_blank">
                                    <small class="flex-fill text-center border-end py-2">
                                        <i class="fa fa-bed text-primary me-2"></i> Location
                                    </small>
                                </a> -->
                                        <small class="flex-fill text-center border-end py-2" onclick="openGoogleMaps()">
                                            <i class="fa fa-bed text-primary me-2"></i> Location
                                        </small>

                                        <script>
                                            function openGoogleMaps() {
                                                if (navigator.geolocation) {
                                                    navigator.geolocation.getCurrentPosition(function (position) {
                                                        var lat = position.coords.latitude;
                                                        var lng = position.coords.longitude;
                                                        window.open(`https://www.google.com/maps/place/KrongSiemReap+Angkor/@13.3625718,103.8513923,847m/data=!3m2!1e3!4b1!4m6!3m5!1s0x3110175dfaab38fb:0x49f782a12d1b05e4!8m2!3d13.3625718!4d103.8562632!16s%2Fg%2F11y3srn5t0?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D" target="_blank=${lat},${lng}`, '_blank');
                                                    }, function (error) {
                                                        alert('Unable to retrieve your location');
                                                    });
                                                } else {
                                                    alert('Geolocation is not supported by your browser.');
                                                }
                                            }
                                        </script>

                                       <a href="view-detail1.php" class="flex-fill text-center border-end py-2 text-decoration-none">
                                            <small class="flex-fill text-center">
                                                <i class="fa fa-bath text-primary me-2"></i>View
                                            </small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="./img/cycle/3.png" alt=""></a>
                                        <div
                                            class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            VIP</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Shop</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">$100</h5>
                                        <h5 class="d-block h5 mb-2" href="">ទៅមើលថ្ងៃលិចនៅក្នុងអង្គវត្ត</h5>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, seam reap
                                        </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>1.2k</small>
                                        <small class="flex-fill text-center border-end py-2" onclick="openGoogleMaps()">
                                            <i class="fa fa-bed text-primary me-2"></i> Location
                                        </small>

                                        <script>
                                            function openGoogleMaps() {
                                                if (navigator.geolocation) {
                                                    navigator.geolocation.getCurrentPosition(function (position) {
                                                        var lat = position.coords.latitude;
                                                        var lng = position.coords.longitude;
                                                        window.open(`https://www.google.com/maps/place/%E1%9E%80%E1%9E%93%E1%9F%92%E1%9E%9B%E1%9F%82%E1%9E%84%E1%9E%98%E1%9F%81%E1%9E%B8%E1%9E%9B%E1%9E%90%E1%9F%92%E1%9E%84%E1%9F%83%E1%9E%9B%E1%9E%B7%E1%9E%85/@13.3632533,103.8538281,847m/data=!3m2!1e3!4b1!4m6!3m5!1s0x31101700556db363:0x4f3ec8622a7ef66a!8m2!3d13.3632533!4d103.856403!16s%2Fg%2F11y494mwhc?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D=${lat},${lng}`, '_blank');
                                                    }, function (error) {
                                                        alert('Unable to retrieve your location');
                                                    });
                                                } else {
                                                    alert('Geolocation is not supported by your browser.');
                                                }
                                            }
                                        </script>



                                       <a href="view-detail2.php" class="flex-fill text-center border-end py-2 text-decoration-none">
                                            <small class="flex-fill text-center">
                                                <i class="fa fa-bath text-primary me-2"></i>View
                                            </small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->
        <style>
            .testimonial-carousel {
                font-family: "Battambang", system-ui;

            }
        </style>



        <section class="testimonial-carousel">
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="testimonial-card">
                            <h4 class="text-success">❝</h4>
                            <p>អានអ្វីដែលអតិថិជនរបស់យើងនិយាយអំពីការធ្វើដំណើររបស់ពួកគេជាមួយ</p>
                            <p class="text-center text-center">
                                ខ្ញុំពិតជាសប្បាយចិត្ត ជាខ្លាំងជាមួយក្រុមដំណើរកម្សាន្ត មួយនេះ
                                ពួកគាត់ពិតជាបំពេញតួនាទីបានយ៉ាងល្អក្នុងការ ណែនាំំបង្ហាញមកកាន់ពួកខ្ញុំ
                                ព្រមទាំំងមានឥរិយាបទរួសរាយរាក់ទាក់ទន់ភ្លន់ ថែមទៀតផង ។​ <strong style="color: red;">
                                    ពីខ្ញុំ : សុផល</strong>
                            </p>
                            <div class="stars">★★★★★</div>
                            <small class="text-center">99% ខ្ញុំសូមជូន ទៅកាន់នាក់់ <strong style="color: red">
                                    ដំណើរ/កម្សាន្ត</strong> សេវាកម្មពិតជាល្អខ្លាំង </small>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="testimonial-card">
                            <h4 class="text-success text-center">❝</h4>
                            <p>អានអ្វីដែលអតិថិជនរបស់យើងនិយាយអំពីការធ្វើដំណើររបស់ពួកគេជាមួយ</p>
                            <p class="text-center text-center">
                                ខ្ញុំពិតជាសប្បាយចិត្ត ជាខ្លាំងជាមួយក្រុមដំណើរកម្សាន្ត មួយនេះ
                                ពួកគាត់ពិតជាបំពេញតួនាទីបានយ៉ាងល្អក្នុងការ ណែនាំំបង្ហាញមកកាន់ពួកខ្ញុំ
                                ព្រមទាំំងមានឥរិយាបទរួសរាយរាក់ទាក់ទន់ភ្លន់ ថែមទៀតផង ។​ <strong style="color: red;">
                                    ពីខ្ញុំ : សាលិ</strong>
                            </p>
                            <div class="stars text-center">★★★★★</div>
                            <small class="text-center">99% ខ្ញុំសូមជូន ទៅកាន់នាក់់ <strong style="color: red">
                                    ដំណើរ/កម្សាន្ត</strong> សេវាកម្មពិតជាល្អខ្លាំង </small>
                        </div>
                    </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
                </button>
            </div>
        </section>


        <!-- Contact Start -->
        <div class="text-center mx-auto mb-3 wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 600px; font-family: 'Battambang', system-ui;">
            <h1 class="mb-3">Contact Us</h1>
            <p>សម្រាប់លោកអ្នកដែលចង់ជាវកញ្ចប់ដំណើរកំសាន្តខាងយើងខ្ញុំសូមទំនាក់ទំនងមកកាន់លេខទូស័ព្ទខាងក្រោមនេះឬអាចទំនាក់ទំនងតាមរយៈ
                Social Media ខាងក្រោមបាន</p>
        </div>
        <div class="container-xxl py-5 d-flex justify-content-around">
            <div class="container">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="bg-light rounded p-3">
                                    <div class="d-flex align-items-center bg-white rounded p-3 border-dashed">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-map-marker-alt text-primary"></i>
                                        </div>
                                        <span>123 Street, Cambodia Seam Reap</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="bg-light rounded p-3">
                                    <div class="d-flex align-items-center bg-white rounded p-3 border-dashed">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-envelope-open text-primary"></i>
                                        </div>
                                        <span>info@example.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="bg-light rounded p-3">
                                    <div class="d-flex align-items-center bg-white rounded p-3 border-dashed">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-phone-alt text-primary"></i>
                                        </div>
                                        <span>+855 093 854 6463</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12588869.040257253!2d102.3401571!3d12.565679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310787bfd4dc3743%3A0xe4b7bfe089f41253!2sCambodia!5e0!3m2!1sen!2s!4v1693401245678"
                            frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0">
                        </iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <p class="mb-4">
                                លោកអ្នកអាចបំពេញFormខាងក្រោមដើម្បីអោយក្រុមការងារទំនាក់ទំនងទៅដើម្បីផ្តល់ពត័មានបន្ថែម
                                រាល់មានសំណួចម្ងល់ក្រុមការងារនិងទំនាក់ទំនងលោកអ្នកវិញភ្លាមតែម្តង.</p>
                            <form action="" method="POST">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                            <label for="name">ឈ្មោះ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="package" name="package" placeholder="Travel Package" required>
                                            <label for="package">កញ្ចប់ធ្វើដំណើរ</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="number" name="phone" placeholder="Phone Number" required>
                                            <label for="number">លេខទូស័ព្ទ</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 150px" required></textarea>
                                            <label for="message">ពត័មានសំណួចម្ងល់</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                                error_reporting(E_ALL);
                                ini_set('display_errors', 1);
                                $host = "localhost";
                                $user = "root";
                                $password = "";
                                $database = "system_school";
                                $conn = new mysqli($host, $user, $password, $database);
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    $name = trim($_POST["name"] ?? '');
                                    $email = trim($_POST["email"] ?? '');
                                    $package = trim($_POST["package"] ?? '');
                                    $phone = trim($_POST["phone"] ?? '');
                                    $message = trim($_POST["message"] ?? '');
                                    if (!empty($name) && !empty($email) && !empty($package) && !empty($phone) && !empty($message)) {
                                        $stmt = $conn->prepare("INSERT INTO tblmessage (name, email, package, phone, message) VALUES (?, ?, ?, ?, ?)");
                                        $stmt->bind_param("sssss", $name, $email, $package, $phone, $message);
                                        if ($stmt->execute()) {
                                            echo "<script>alert('Message Sent Successfully!'); window.location.href='index.php';</script>";
                                        } else {
                                            echo "<script>alert('Error Sending Message!');</script>";
                                        }
                                        $stmt->close();
                                    } else {
                                        echo "<script>alert('Please fill in all fields.');</script>";
                                    }
                                }
                                $conn->close();
                           ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Contact End -->
        <?php include './includes/footer.php' ?>

        <!---->
</body>

</html>