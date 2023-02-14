
<?php if(Auth::user()->is_admin): ?>

<?php $__env->startSection('content'); ?>

                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0" >
                            <h1> admin</h1>
                    </div>
                </div>



<?php $__env->stopSection(); ?>

<?php endif; ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vicha\OneDrive\Documenten\games\Bureaublad\pc backup\Programmeren_2021_2022\Backend Web\werkstukV2\werkstukv2\resources\views/admin/admin.blade.php ENDPATH**/ ?>