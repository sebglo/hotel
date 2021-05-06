<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Add New Product</h2>
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

<form action="<?php echo e(route('layouts.store')); ?>" method="POST">
<?php echo csrf_field(); ?>

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Title:</strong>
<input type="text" name="title" class="form-control" placeholder="Enter Title">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Description:</strong>
<textarea class="form-control" style="height:150px" name="description" placeholder="Enter Description"></textarea>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sebastien/projetfinAnnee/hotel/siteHotel/resources/views/layouts/create.blade.php ENDPATH**/ ?>