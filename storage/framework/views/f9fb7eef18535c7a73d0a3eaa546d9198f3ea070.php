<?php if(Auth::user()->is_admin): ?>

<?php $__env->startSection('content'); ?>
<div>
    <h1>Admin: Add Items</h1>
</div>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>


<form method="post" action="/addItem">
    <?php echo csrf_field(); ?>
<div>
    <div>
        <input type="text"
        name = "name"
        placeholder="Item Name">
    </div>
    <br>
    <div>
        <input type="text"
        name="description"
        placeholder="description">
    </div>
    <br>
    <div>
        <input type="text"
        name="price"
        placeholder="price">
    </div>
    <br>
    <div>
        <input type="text"
        name="stock"
        placeholder="stock">
    </div>
    <br>
    <div >
        <button type="submit" class="btn btn-primary">Add Item</button>
    </div>
</div>


</form>


<?php $__env->stopSection(); ?>
<?php endif; ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vicha\OneDrive\Documenten\games\Bureaublad\pc backup\Programmeren_2021_2022\Backend Web\werkstukV2\werkstukv2\resources\views/admin/addItem.blade.php ENDPATH**/ ?>