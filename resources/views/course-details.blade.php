<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Course Details {{ $course->title }}</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon" />
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Mentor
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Updated: Mar 18 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="course-details-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <h1 class="">Knowledge Hub</h1>
            </a>

            <nav id="navmenu" class="navmenu">

                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">
        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Course Details</h1>

                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="current">Course Details</li>
                    </ol>
                </div>
            </nav>
        </div>
        <!-- End Page Title -->

        <!-- Courses Course Details Section -->
        <section id="courses-course-details" class="courses-course-details section">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-8">
                        <img src="{{ asset('img/course-1.jpg') }}" class="img-fluid" alt="" />
                        <h3>{{ $course->title }}</h3>
                        <p>
                            {{ $course->description }}
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5>Trainer</h5>
                            <p>{{ $course->instructor }}</p>
                        </div>

                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5>Category</h5>
                            <p>{{ $course->category }}</p>
                        </div>

                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5>Level</h5>
                            <p>{{ $course->level }}</p>
                        </div>
                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5>Video Resource</h5>
                            <p> <a class="btn btn-sm btn-secondary" href="{{ $course->video_url }}"> Go to video</a>
                            </p>
                        </div>
                        <div class="course-info d-flex justify-content-between align-items-center">
                            <h5>Resource File</h5>
                            <p> <a class="btn btn-sm btn-primary" href="{{ asset('storage/' . $course->attachment) }}">
                                    View
                                    File</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Courses Course Details Section -->
    </main>

    <footer id="footer" class="footer position-relative">


        <div class="container copyright text-center mt-4">
            <p>
                © <span>Copyright</span> <strong class="px-1">Knowledge Hub</strong>
                <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="#">Allan Abaho</a>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('/js/main.js') }}"></script>
</body>

</html>
