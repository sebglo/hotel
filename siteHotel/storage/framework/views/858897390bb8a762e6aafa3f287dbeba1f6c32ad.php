<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-2">
            
        </div>
        <div class="col-lg-8">
            
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Creation d'une chambre</h2>
                    </div>
                    <div class="pull-right">
                        <a class="w3-bar-item w3-button w3-grey w3-mobile" href="<?php echo e(route('chambre.index')); ?>"> Retour</a>
                    </div>
                </div>
            </div>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> il y a un probleme dans votre saisie.<br><br>
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            
            <form action="<?php echo e(route('chambre.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Taille de la chambre:</strong>
                            <input type="text" name="taille" class="form-control"
                                placeholder="taille">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Prix de la chambre:</strong>
                            <input type="text" name="prix" class="form-control"
                                placeholder="prix">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nombre de lit:</strong>
                            <input type="text" name="nombre_de_lit" class="form-control"
                                placeholder="nombre_de_lit">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Type de lit:</strong>
                            <input type="text" name="type_de_lit" class="form-control"
                                placeholder="type_de_lit">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Balcon:</strong>
                            <input type="text" name="balcon" class="form-control"
                                placeholder="balcon">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button class="w3-bar-item w3-button w3-grey w3-mobile" type="submit" class="btn btn-primary">Valider</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-2">
            
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sebastien/projetfinAnnee/hotel/siteHotel/resources/views/layouts/create.blade.php ENDPATH**/ ?>