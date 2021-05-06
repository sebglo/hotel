<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HOTEL-HOTEL</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/style.css">

    <!-- Styles -->
    <style>

.box { display: inline; width: 100px; }
    </style>
</head>

<body class="w3-light-grey">

    <!-- Navigation Bar -->
    <div class="w3-bar w3-white w3-large">
        <div class="relative flex items-top bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <?php if(Route::has('login')): ?>
                <div class="hidden fixed top-0 left-0 sm:block">
                    <a href="/" class="w3-bar-item w3-button w3-red w3-mobile">
                        <i class="fa fa-bed w3-margin-right"></i>Accueil</a>
                    
                    <a href="/contact" class="w3-bar-item w3-button w3-mobile">Contact</a>
                    <div class="hidden fixed top-0 right-0 sm:block">
                        <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(url('/admin')); ?>" class="w3-bar-item w3-button w3-mobile">Administration</a>
                        <?php else: ?>
                            <a href="<?php echo e(route('login')); ?>" class="w3-bar-item w3-button w3-mobile">Log in</a>

                            <?php if(Route::has('register')): ?>
                                <a href="<?php echo e(route('register')); ?>" class="w3-bar-item w3-button w3-mobile">Register</a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
            <?php endif; ?>
        </div>

    </div>
    <div class="">
        <?php echo $__env->yieldContent('content'); ?>
    </div>


    <!-- Footer -->
    
    

    <!-- Add Google Maps -->
    <script>
        function myMap() {
            myCenter = new google.maps.LatLng(41.878114, -87.629798);
            var mapOptions = {
                center: myCenter,
                zoom: 12,
                scrollwheel: false,
                draggable: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

            var marker = new google.maps.Marker({
                position: myCenter,
            });
            marker.setMap(map);
        }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap">
    </script>
    <!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>

</html>
<?php /**PATH /home/sebastien/projetfinAnnee/hotel/siteHotel/resources/views/welcome.blade.php ENDPATH**/ ?>