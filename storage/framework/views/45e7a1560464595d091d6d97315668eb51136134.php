


<nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Fablab Shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
                </li>

                <?php if(auth()->guard()->check()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('shop')); ?>">Shop</a>
                    </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('saldo')); ?>">Saldo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('overview')); ?>">Purchases</a>
                </li>

                <?php if(Auth::user()->is_admin): ?>                
                <li>
                    <a class="nav-link admin" href="<?php echo e(route('addUser')); ?>">ADMIN: Add User</a>
                </li>
                <li>
                    <a class="nav-link admin" href="<?php echo e(route('addItem')); ?>">ADMIN: Add Item</a>
                </li>
                <li>
                    <a class="nav-link admin" href="<?php echo e(route('overview')); ?>">ADMIN: Sales Overview </a>
                </li>
                <li>
                    <a class="nav-link admin" href="<?php echo e(route('userOverview')); ?>">ADMIN: User Overview </a>
                </li>
                <li>
                    <a class="nav-link admin" href="<?php echo e(route('itemOverview')); ?>">ADMIN: Item Overview </a>
                </li>
                
                

                
                
        
                <?php else: ?>
                <?php endif; ?>

                <li class="nav-item">
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>

                        <li class="nav-item">
                            <a class="nav-link" :href="route('logout')"
                                            onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                <?php echo e(__('Log Out')); ?>

                            </a>
                        </li>
                    </form>
                </li>
                    <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('register')); ?>">register</a>
                    </li>
<?php if(Auth::user()): ?>

<?php endif; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <h6>
        <?php if(auth()->guard()->check()): ?>
        <p>Hallo <?php echo e(Auth::user()->name); ?>, jij bent
            <?php if(Auth::user()->is_admin): ?>
                een admin
            <?php else: ?>
                een gebruiker
            <?php endif; ?>
        <?php endif; ?>
    </h6>
</nav>
<?php /**PATH C:\Users\vicha\OneDrive\Documenten\games\Bureaublad\pc backup\Programmeren_2021_2022\Backend Web\werkstukV2\werkstukv2\resources\views/partials/navbar.blade.php ENDPATH**/ ?>