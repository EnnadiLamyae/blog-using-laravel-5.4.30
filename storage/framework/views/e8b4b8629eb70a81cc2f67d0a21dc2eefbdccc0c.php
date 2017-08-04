<?php $__env->startSection('content'); ?>

    <div class="col-sm-8 ">
        <h1> Register</h1>
        <hr>


        <form method="POST" action="/register">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">

                <label for="name"> Name :</label>
                <input type="text" name="name" id="name" class="form-control" required>


                <label for="email"> Email :</label>
                <input type="email" name="email" id="email" class="form-control" required>

                <label for="password"> Password :</label>
                <input type="password" name="password" id="password" class="form-control" required>

                <label for="password_confirmation"> Password Confirmation :</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>


                <button type="submit" class="btn btn-primary">Register</button>

            </div>
        </form>
        <?php echo $__env->make('layouts.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>