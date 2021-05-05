<?php $__env->startSection('content'); ?>
<div class="w3-container w3-white w3-padding-16">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3><?php echo e(Auth::user()->name); ?> vous etez bien connecté(e)</h3></div>

                
            </div>
        </div>
    </div>
</div>

<div class="container">
    <a class="w3-bar-item w3-button w3-red w3-mobile" href="">Entrer une nouvelle chambre</a>
</div>

<div class="container">

    <table class="table table-bordered">
        <tr>
        <th>No</th>
        <th>taille</th>
        <th>nbx de lit</th>
        <th>type de lit</th>
        <th>balcon</th>
        <th width="280px">Action</th>
        </tr>
        
        <?php $__currentLoopData = $chambres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chambre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <tr>
        <td><?php echo e($chambre->id); ?></td>
        <td><?php echo e($chambre->taille); ?></td>
        <td><?php echo e($chambre->nombre_de_lit); ?></td>
        <td><?php echo e($chambre->type_de_lit); ?></td>
        <td><?php echo e($chambre->balcon); ?></td>
        <td>
        <form action="<?php echo e(route('layouts.destroy',$chambre->id)); ?>" method="POST">
        <a class="btn btn-info" href="<?php echo e(route('layouts.show',$chambre->id)); ?>">Show</a>
        <a class="btn btn-primary" href="<?php echo e(route('layouts.edit',$chambre->id)); ?>">Edit</a>
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sebastien/projetfinAnnee/hotel/siteHotel/resources/views/layouts/home.blade.php ENDPATH**/ ?>