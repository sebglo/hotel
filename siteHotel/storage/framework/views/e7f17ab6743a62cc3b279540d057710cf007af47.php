<?php $__env->startSection('content'); ?>
    <div class="w3-content" style="max-width:1532px;">

        <h1>chambre en detail</h1>
        
            <img src="../../images/room_single.jpg" alt="Norway" style="width:50%">
            <div class="w3-container w3-white">
                <h3>Single Room</h3>
                <h6 class="w3-opacity">From $99</h6>
                <p>Single bed</p>
                <p>15m<sup>2</sup></p>
                <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i></p>
                <a href="/reserve">
                <button class="w3-button w3-block w3-black w3-margin-bottom">Reserver votre chambre</button>
                </a>
            </div>
        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sebastien/projetfinAnnee/hotel/siteHotel/resources/views/LayoutPublic/singleRoom.blade.php ENDPATH**/ ?>