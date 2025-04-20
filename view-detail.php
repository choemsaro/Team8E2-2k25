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

</head>
<style>
    body {
        font-family: "Battambang", system-ui;

    }

    .container123 {
        display: flex;
        width: 100%;
        height: 700px;
    }

    .box-detail {
        width: 50%;
        height: 100%;
    }

    .image1 {
    position: relative;
    width: 93%;
    overflow: hidden;
    margin: auto;
}

.image1 img {
    border-radius: 8px;
    width: 100%;
    height: auto;
    transition: transform 0.5s ease;
}

.image-text1 {
    position: absolute;
    bottom: 15px;
    left: 20px;
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    font-size: 1rem;
    font-family: 'Khmer OS Battambang', sans-serif;
    opacity: 0;
    transition: opacity 0.5s ease;
}
.image1:hover img {
    transform: scale(1.05); /* Zoom slightly */
}

.image1:hover .image-text1 {
    opacity: 1; /* Show text */
}
.container-xxl {
    width: 100%;
}
  .detail {
    display: flex;
    margin-top: 10px;
    margin-left: 20px;
    width: 93%;
    height: 40%;
}
.detail1{
    display: flex;
    margin-top: 2px;
    margin-left: 30px;
    width: 93%;
    height: 40%;
}
.imgage-left, .imgage-right {
    width: 50%;
    background-color: blue;
    height: 100%;
    position: relative; /* Add this to contain absolute children */
    overflow: hidden;
}

.imgage-left img, .imgage-right img {
    width: 100%;
    height: 100%;
    display: block;
}

.image-text {
    position: absolute;
    top: 85%;
    left: 0;
    text-align: center;
    width: 100%;
    height: 100%;
    color: white;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    
    justify-content: center;
    font-size: 18px;
    opacity: 0;
    transition: opacity 0.3s ease;
}

/* Show text on hover */
.imgage-left:hover .image-text,
.imgage-right:hover .image-text {
    opacity: 1;
}

    

</style>

<body>

    <?php include_once('includes/header.php'); ?>
    <div class="container123" id="view1">
        <div class="box-detail">
            <br>
            <div class="image1">
                <img src="/img/member/ankor.png" alt="">
                
            </div>
            <div class="detail">
                <p>
                    ប្រាសាទអង្គរវត្តគឺជាមរតកពិភពលោកនិងជាគោលដៅទេសចរណ៍ដ៏ល្បីល្បាញនៅកម្ពុជា។
                    មានកន្លែងសម្បូរបែបសម្រាប់ដើរលេងនិងស្វែងយល់អំពីប្រវត្តិសាស្ត្រ។
                    ខាងក្រោមនេះជាកន្លែងសំខាន់ៗដែលអ្នកអាចចូលទៅលេងក្នុងប្រាសាទអង្គរវត្ត៖
                    សាលាកណ្តាល និងប្រាសាទមេ
                    ជាផ្នែកសំខាន់បំផុតនៃប្រាសាទអង្គរវត្ត
                    មានបង្ហាញរូបចម្លាក់និងអត្ថបទអត្ថាធិប្បាយអំពីរឿងរ៉ាវប្រវត្តិសាស្ត្រ
                    អាចឡើងទៅកំពូលដើម្បីទស្សនាទិដ្ឋភាពពាសពេញប្រាសាទ
                    រនាំងរូបចម្លាក់
                    រូបចម្លាក់នៅលើជញ្ជាំងបង្ហាញរឿងរ៉ាវប្រវត្តិសាស្ត្រ និងព្រហ្មញ្ញសាសនា
                    រឿង "សង្គ្រាមកួរីក្ស" និង "រឿងលោតសមុទ្រ" ជារឿងពេញនិយម
                    បរិវេណខាងក្រៅ
                    ជាជញ្ជាំងផ្តុំគ្រឿងចម្លាក់សិល្បៈបុរាណ
                    មានទេសភាពស្អាតព័ទ្ធជុំវិញប្រាសាទ
                    បង្គោលផ្កាយ
                    មានបណ្ណាល័យបួននៅជ្រុងនីមួយៗ
                    កន្លែងស្រស់ស្អាតសម្រាប់ថតរូបនិងសិក្សាពីសិលាចារឹក
                    បរិវេណទឹកដែលប៉ដ្ឋប់នៅជុំវិញប្រាសាទ
                    អាចបង្ហាញអង្គរវត្តក្នុងការឆ្លុះក្នុងទឹកបានយ៉ាងស្រស់ស្អាត
                    ច្រកចូលទ្វារ
                    ជាច្រកចូលសំខាន់បំផុតនៃប្រាសាទ
                    មានសិលាចារឹក និងរូបចម្លាក់ល្អៗ
                    បុព្វទ្វារ
                    មនុស្សមិនសូវច្រើន ដូច្នេះអាចមានភាពស្ងប់ស្ងាត់សម្រាប់អស់អារម្មណ៍
                    ទិដ្ឋភាពថ្ងៃរះ
                </p>
            </div>
        </div>
        <div class="box-detail">
            <br>
            <div class="image1">
                <img src="/img/member/ankor1.png" alt="">
                <div class="image-text1">ក្នុងប្រសាទតែម្តងទេសភាពស្អាតការទាក់ទាញអោយភ្ញៀវនៅក្រៅនិងក្នុងប្រទេសមកទស្សនានាថ្ងៃលិចយ៉ាងច្រើនកុះករមិនតែប៉ុន្នោះប្រទេសកម្ពុជាជាប់ចំណាត់ថ្នាក់លេខ១ដែលមានទេសភាពថ្ងៃលិចស្អាចជាងគេ</div>
            </div>
            <div class="detail1">
                <div class="imgage-left">
                    <img src="/img/cycle/angkor2.png" alt="">
                     <div class="image-text">ប្រាសាទអង្គរវត្តថតរូបជុំគ្នា</div>
                </div>
                <div class="imgage-right">
                    <img src="/img/cycle/angkor1.png" alt="">
                     <div class="image-text">ក្នុងប្រសាទតែម្តងទេសភាពស្អាត</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="tab-pane fade show p-0">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href=""><img class="img-fluid" src="./img/cycle/2.png" alt=""></a>
                            <div class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
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
                            </script><a
                                class="flex-fill text-center border-end py-2 text-decoration-none">
                                <small class="flex-fill text-center">
                                    <i class="fa fa-bath text-primary me-2" href="#view1"></i>View
                                </small>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href=""><img class="img-fluid" src="./img/cycle/angkor5.png" alt=""></a>
                            <div class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                For Rent</div>
                            <div
                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                Villa</div>
                        </div>
                        <div class="p-4 pb-0">
                            <h5 class="text-primary mb-3">$60</h5>
                            <h5 class="d-block h5 mb-2" href="">ចម្រុះក្នុងអង្គរវត្ត</h5>
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
                            </script> <a href="view-detail.php"
                                class="flex-fill text-center border-end py-2 text-decoration-none">
                                <small class="flex-fill text-center">
                                    <i class="fa fa-bath text-primary me-2" href="#view1"></i>View
                                </small>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href=""><img class="img-fluid" src="/img/cycle/angkor3.png" alt=""></a>
                            <div class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                For Sell</div>
                            <div
                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                Office</div>
                        </div>
                        <div class="p-4 pb-0">
                            <h5 class="text-primary mb-3">$55</h5>
                            <h5 class="d-block h5 mb-2" href="">មើលថ្ងៃរះក្នុងអង្គរវត្ត</h5>
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

                            </script> <a href="view-detail1.php"
                                class="flex-fill text-center border-end py-2 text-decoration-none">
                                <small class="flex-fill text-center">
                                    <i class="fa fa-bath text-primary me-2" id="view1"></i>View
                                </small>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href=""><img class="img-fluid" src="./img/cycle/4.png" alt=""></a>
                            <div class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
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
                            </script> <a href="view-detail3.php"
                                class="flex-fill text-center border-end py-2 text-decoration-none">
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
                            <div class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                For Sell</div>
                            <div
                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                Home</div>
                        </div>
                        <div class="p-4 pb-0">
                            <h5 class="text-primary mb-3">$45</h5>
                            <h5 class="d-block h5 mb-2" href="">ថតរូបអនុវស្សាយ៏ជុំគ្នា</h5>
                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, Seam Reab,
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
                            </script> <a href="view-detail4.php"
                                class="flex-fill text-center border-end py-2 text-decoration-none">
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
                            <div class="bg-danger rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
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
                            </script> <a href="view-detail2.php"
                                class="flex-fill text-center border-end py-2 text-decoration-none">
                                <small class="flex-fill text-center">
                                    <i class="fa fa-bath text-primary me-2"></i>View
                                </small>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- <div class="col-12 text-center">
                                <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                            </div> -->
            </div>
        </div>
    </div>
    </div>
    </div>
   
    <style>
        .testimonial-carousel {
            font-family: "Battambang", system-ui;

        }
    </style>

    </div>
    <!---->
    <script src="js/responsiveslides.min.js"></script>
</body>
<?php include './includes/footer.php' ?>

</html>