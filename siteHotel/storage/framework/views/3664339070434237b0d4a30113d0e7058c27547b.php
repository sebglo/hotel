<?php $__env->startSection('content'); ?>

    <!-- Page content  affichage de trois chambre de l'hotel-->


    <div class="w3-content" style="max-width:1532px;">
        <div class="container">

            <?php $__currentLoopData = $chambres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chambre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="container row flex-wrap">
                    <div class="col-md-3">
                        <div class="w3-row-padding w3-padding-16">
                            <div class="w3-third w3-margin-bottom">
                                <img src="../../images/room_single.jpg" alt="Norway" style="width:100%">
                                <h3> <?php echo e($chambre->prix); ?> $ </h3>
                                <h6 class="w3-opacity"> <?php echo e($chambre->nombre_de_lit); ?> lits</h6>

                                <p> <?php echo e($chambre->taille); ?> <sup>m2</sup></p>
                                <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i
                                        class="fa fa-wifi"></i>
                                </p>
                                
                                <a href="<?php echo e(URL::to('home/' . $chambre->id)); ?>">
                                    <button class="w3-button w3-block w3-black w3-margin-bottom">Reserver</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

        

        <div class="w3-row-padding w3-large w3-center" style="margin:32px 0">
            <div class="w3-third"><i class="fa fa-map-marker w3-text-red"></i> 423 Some adr, Chicago, US</div>
            <div class="w3-third"><i class="fa fa-phone w3-text-red"></i> Phone: +00 151515</div>
            <div class="w3-third"><i class="fa fa-envelope w3-text-red"></i> Email: mail@mail.com</div>
        </div>

        <div class="w3-panel w3-red w3-leftbar w3-padding-32">
            <h6><i class="fa fa-info w3-deep-orange w3-padding w3-margin-right"></i> On demand, we can offer
                playstation, babycall, children care, dog equipment, etc.</h6>
        </div>





    <?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sebastien/projetfinAnnee/hotel/siteHotel/resources/views/LayoutPublic/listSimple.blade.php ENDPATH**/ ?>