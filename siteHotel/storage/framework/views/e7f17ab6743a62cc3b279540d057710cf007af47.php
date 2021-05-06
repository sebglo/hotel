<?php $__env->startSection('content'); ?>
<div class="w3-content" style="max-width:1532px;">




    <h1>Chambre en detail</h1>
    
    <img src="../../images/room_single.jpg" alt="Norway" style="width:50%">
    <div class="w3-container w3-white">
        <h3> <?php echo e($chambre->prix); ?> $ </h3>
        <h6 class="w3-opacity"> <?php echo e($chambre->nombre_de_lit); ?> lits</h6>

        <p> <?php echo e($chambre->taille); ?> <sup>m2</sup></p>
        <p> Balcon :  <?php echo e($chambre->balcon); ?> </p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i>
        </p>


    </div>





<?php echo $__env->make('LayoutPublic.reservation.reservRoom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sebastien/projetfinAnnee/hotel/siteHotel/resources/views/LayoutPublic/singleRoom.blade.php ENDPATH**/ ?>