<!DOCTYPE html>
<html lang="{{LaravelLocalization::getCurrentLocaleRegional()}}">
<head>
    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Home</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/datepicker.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

{{--  HEADER  --}}
@include('components.header')

<main class="page-main" data-m-parallax>
    <section class="top-screen g-container-outer">
        <div class="top-screen__inner g-container-inner">
            <h1 class="top-screen__title"><strong>{{$company->name}}</strong><br>{{$company->title}}</h1>
            <a href="#" class="top-screen__btn g-btn-red _shadow _pulse" data-scroll-to-link="masters">Записатися на
                стрижку</a>

            <div class="top-screen__mouse mouse _animate"></div>
        </div>
    </section>
        {{--   Services--}}
        @include('components.services.services')

    <div class="page-main__general-bg">

        {{--  Banner  --}}
        @include('components.banner')

        {{--  Masters  --}}
        @include('components.masters')
    </div>
        {{--  Gallery  --}}
        @include('components.gallery')

        {{--    MAP   --}}
        @include('components.map')

</main>

        {{--  Footer  --}}
        @include('components.footer')

        {{--modal--}}
        @include('components.modal.modal')

<script src="js/libs/jquery-3.3.1.min.js"></script>
<script src="js/libs/scroll-lock.min.js"></script>
<script src="js/libs/jquery.mask.min.js"></script>
<script src="js/libs/datepicker.min.js"></script>
<script src="js/libs/swiper.min.js"></script>
<script src="js/main.js"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdDxXaKJJOG3mqd-ZKcBtoOoXN3BfFN8c&callback=initMap"></script>
</body>
</html>

