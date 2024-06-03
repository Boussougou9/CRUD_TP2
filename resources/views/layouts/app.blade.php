    <!DOCTYPE html>
    <html lang="en">

    <!-- Mirrored from kofejob.dreamstechnologies.com/html/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 09:03:33 GMT -->

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        <title>KofeJob</title>

        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">

        <link rel="stylesheet" href="assets/plugins/feather/feather.css">

        <link rel="stylesheet" href="assets/plugins/aos/aos.css">

        <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body class="home-page bg-one">

        <div id="global-loader">
            <div class="whirly-loader"> </div>
            <div class="loader-img">
                <img src="assets/img/load-icon.svg" class="img-fluid" alt="Img">
            </div>
        </div>


        <div class="main-wrapper">


           @include('layouts.header')

           @yield('content')

           @include('layouts.footer')

        </div>

        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="ti-angle-up"><img src="assets/img/icon/top-icon.svg" class="img-fluid"
                    alt="Img"></span>
        </button>

        @yield('script')
    </body>

    <!-- Mirrored from kofejob.dreamstechnologies.com/html/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 09:04:49 GMT -->

    </html>
