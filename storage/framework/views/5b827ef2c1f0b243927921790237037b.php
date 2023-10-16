<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-signin w-100 m-auto">
            <form>
                <center>
                    <img class="mb-4 mt-5" src="/img/logo.jpg" alt="" width="72" height="57">
                </center>
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Username">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
            </form>
        </main>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Kuliah\semester 3\PBL\Project\resources\views/login.blade.php ENDPATH**/ ?>