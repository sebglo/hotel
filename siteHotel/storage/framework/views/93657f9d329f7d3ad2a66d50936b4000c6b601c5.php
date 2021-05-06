<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Product</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="<?php echo e(route('layouts.index')); ?>"> Back</a>
</div>
</div>
</div>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li><?php echo e($error); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</div>
<?php endif; ?>

<?php print_r($chambre); //die; ?>
<form action="<?php echo e(route('layouts.update',$chambre->id)); ?>" method="POST">
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Title:</strong>
<input type="text" name="title" value="<?php echo e($chambre->taille); ?>" class="form-control" placeholder="Title">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Description:</strong>
<textarea class="form-control" style="height:150px" name="description" placeholder="Detail">texte</textarea>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>

<div class="w3-container w3-white w3-padding-16">
    <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px;">
            <div class="w3-half w3-margin-bottom">
                <label><i class="fa fa-calendar-o"></i> Check In</label>
                <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckIn"
                    required>
            </div>
            <div class="w3-half">
                <label><i class="fa fa-calendar-o"></i> Check Out</label>
                <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckOut"
                    required>
            </div>
        </div>
        <div class="w3-row-padding" style="margin:8px -16px;">
            <div class="w3-half w3-margin-bottom">
                <label><i class="fa fa-male"></i> Adults</label>
                <input class="w3-input w3-border" type="number" value="1" name="Adults" min="1" max="6">
            </div>
            <div class="w3-half">
                <label><i class="fa fa-child"></i> Kids</label>
                <input class="w3-input w3-border" type="number" value="0" name="Kids" min="0" max="6">
            </div>
        </div>
        <button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-search w3-margin-right"></i>
            Search availability</button>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sebastien/projetfinAnnee/hotel/siteHotel/resources/views/layouts/edit.blade.php ENDPATH**/ ?>