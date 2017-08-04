<?php $__env->startSection('content'); ?>

    <div class="col-sm-8 ">
        <h1> Sign In </h1>
        <hr>


        <form method="POST" action="/login">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">


                <label for="email"> Email :</label>
                <input type="email" name="email" id="email" class="form-control" required>

                <label for="password"> Password :</label>
                <input type="password" name="password" id="password" class="form-control" required>


                <button type="submit" class="btn btn-primary">Register</button>

            </div>
        </form>
        <?php echo $__env->make('layouts.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>