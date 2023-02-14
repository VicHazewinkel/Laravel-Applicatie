<?php $__env->startSection('content'); ?>

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0" >
        <h1><?php if(Auth::user()->is_admin): ?>
                Admin
            <?php else: ?>
                Gebruiker
            <?php endif; ?> Sales Overview</h1>
    </div>
</div>

<table class="table">

  <thead class="thead-dark">
    <tr>
      <th scope="col">verkochte items</th>
    </tr>

    <tr>
      <th scope="col">#</th>
      <th scope="col">User Name</th>
      <th scope="col">Item Name</th>
      <th scope="col">Transaction</th>
    </tr>
  </thead>
  <tbody>
<?php $__currentLoopData = $verkopen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $verkoop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
    <tr>
      <th scope="row"><?php echo e($verkoop->id); ?></th>
      <td><?php echo e($verkoop->user->name); ?></td>
      <td><?php echo e($verkoop->item->name); ?></td>
      <td>- €<?php echo e(number_format($verkoop->item->price, 2)); ?></td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>

</table>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vicha\OneDrive\Documenten\games\Bureaublad\pc backup\Programmeren_2021_2022\Backend Web\werkstukV2\werkstukv2\resources\views/admin/overview.blade.php ENDPATH**/ ?>