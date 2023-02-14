<?php $__env->startSection('content'); ?>
<div>
    <h2>Saldo</h2>
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

<div>
    <h3>Huidig Saldo</h3>
    <table class="table" >
        <thead class="thead-dark">
        <tr>
            <th>Saldo</th>
        </tr>

        <tr>
                <td><?php echo e($saldo); ?> €</td>
        </tr>

        </thead>
    </table>
</div>

<div>
    <h3>Add Saldo</h3>
    <div>
        <form method="post" action="/addSaldo">
            <?php echo csrf_field(); ?>
            <div>
                <input type="text"
                name="saldo"
                placeholder="Add Saldo">
            </div>
            <div >
                <button type="submit" class="btn btn-primary">Add Saldo</button>
            </div>
        </form>

    </div>
</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vicha\OneDrive\Documenten\games\Bureaublad\pc backup\Programmeren_2021_2022\Backend Web\werkstukV2\werkstukv2\resources\views/content/saldo.blade.php ENDPATH**/ ?>