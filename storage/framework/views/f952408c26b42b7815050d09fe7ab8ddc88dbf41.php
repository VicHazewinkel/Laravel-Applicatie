<?php $__env->startSection('content'); ?>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

<div class="text-center">

    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col">
      <form method="post" action="/kopen">
          <?php echo csrf_field(); ?>
    <div class="card mb-4 rounded-3 shadow-sm">
      <div class="card-header py-3">
        <h4 class="my-0 fw-normal"><?php echo e($item->name); ?></h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">€<?php echo e($item->price); ?></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Beschrijving: <?php echo e($item->description); ?></li>
          <li>Aantal beschikbaar: <?php echo e($item->stock); ?> </li></li>
        </ul>
          <input type="hidden" name="item_id" value="<?php echo e($item->id); ?>" />
        <button type="submit" class="w-100 btn btn-lg btn-outline-primary">Koop</button>
      </div>
    </div>
      </form>
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vicha\OneDrive\Documenten\games\Bureaublad\pc backup\Programmeren_2021_2022\Backend Web\werkstukV2\werkstukv2\resources\views/content/shop.blade.php ENDPATH**/ ?>