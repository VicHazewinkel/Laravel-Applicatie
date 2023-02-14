<?php if(Auth::user()->is_admin): ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0" >
        <h1>Admin: Item Overview</h1>
    </div>
</div>

<table class="table">

  <thead class="thead-dark">
    <tr>
      <th scope="col">User Overview</th>
    </tr>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Stock</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="col"><?php echo e($item['id']); ?></th>
            <th scope="col"><?php echo e($item['name']); ?></th>
            <th scope="col"><?php echo e($item['description']); ?></th>
            <th scope="col"><?php echo e($item['price']); ?></th>
            <th scope="col"><?php echo e($item['stock']); ?></th>
            <th>
            <form method="post" action="deleteItem">
            <?php echo csrf_field(); ?>
                <input type="hidden"
                        name = "id"
                        value= {{item['id']}
                        hidden>
                <button type="submit">Delete</button>
            </form>
           </th>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php endif; ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vicha\OneDrive\Documenten\games\Bureaublad\pc backup\Programmeren_2021_2022\Backend Web\werkstukV2\werkstukv2\resources\views/admin/itemOverview.blade.php ENDPATH**/ ?>