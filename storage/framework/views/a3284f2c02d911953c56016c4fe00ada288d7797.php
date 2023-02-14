
<?php if(Auth::user()->is_admin): ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0" >
        <h1>Admin: User Overview</h1>
    </div>
</div>
<table class="table">

  <thead class="thead-dark">
    <tr>
      <th scope="col">User Overview</th>
    </tr>
    <tr>
      <th scope="col">id</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Saldo</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="col"><?php echo e($user['id']); ?></th>
            <th scope="col"><?php echo e($user['name']); ?></th>
            <th scope="col"><?php echo e($user['email']); ?></th>
            <th scope="col"><?php echo e($user['saldo']); ?></th>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>

</table>
<?php $__env->stopSection(); ?>
<?php endif; ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vicha\OneDrive\Documenten\games\Bureaublad\pc backup\Programmeren_2021_2022\Backend Web\werkstukV2\werkstukv2\resources\views/admin/userOverview.blade.php ENDPATH**/ ?>