<?php $__env->startSection('content'); ?>
<div class="py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
      <div class="card-header">
        <i class="fas fa-pencil-alt"></i> Edit Profile
      </div>
      <div class="card-body">
        <form action="<?php echo e(route('update.user')); ?>" method="POST"   class="form-horizontal">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="_method" value="PUT">
          <div class="form-group row">
            <label class="col-md-3">Full Name</label>
            <div class="col-md-9">
              <input class="form-control"  type="text" name="name">
              <span class="help-block">Enter your name, so people you know can recognize you.</span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3">Email</label>
            <div class="col-md-9">
              <input class="form-control"  type="email" name="email">
              <span class="help-block">This email will be displayed on your public profile.</span>
            </div>
          </div>
          <button class="btn btn-primary btn-sm">Save</button>
         
        </form>
      </div>
      <div class="card-footer">
        <div class="form-group row">
          <div class="col-md-9 offset-md-3">
          </div>
        </div>
      </div>
  </div>        </div>
    </div>
</div>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BuzzSystem\resources\views/profile/profile.blade.php ENDPATH**/ ?>