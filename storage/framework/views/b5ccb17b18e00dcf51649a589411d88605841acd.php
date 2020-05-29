    
   
 
  

    <?php $__env->startSection('journeyResult'); ?>
   
    <form action="<?php echo e(route('rslt', ['departure_station', 'arrival_station'])); ?>" method="get">
    <?php echo e(csrf_field()); ?>


    <?php echo method_field('GET'); ?>
       <div class="form-group">
               
                <label for="form"><h3 class="text-base text-blue-darker uppercase font-medium"> From</h3></label>
                <select name="departure_station" class="form-control form-control-sm">
  <option value="" disabled selected>Choose your departure station</option>
  <?php $__currentLoopData = $stations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $station): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


  <option value="<?php echo e($station->id); ?>"><?php echo e($station->station_name); ?></option>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</select>
</div>

<div class="form-group">

                <label for="To"><h3 class="text-base text-blue-darker uppercase font-medium"> To</h3></label>
                <select name="arrival_station" class="form-control form-control-sm">
  <option value="" disabled selected>Choose your destnation</option>
  <?php $__currentLoopData = $stations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $station): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


  <option value="<?php echo e($station->id); ?>"><?php echo e($station->station_name); ?></option>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</select>
</div>
<button class="btn btn-primary btn-sm">Search journey</button>
</form>
    <?php echo jquery(); ?>
    <?php echo toastr_js(); ?>
    <?php echo app('toastr')->render(); ?>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BuzzSystem\resources\views/index.blade.php ENDPATH**/ ?>