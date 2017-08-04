<?php $__env->startSection('content'); ?>
    <div class="col-sm-8 blog-main">
        <strong><?php echo e($post->user->name); ?></strong>
    <h1>
        <?php echo e($post->title); ?>

    </h1>

        <?php if(count($post->tags)): ?>
            <ul>
                <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="/posts/tags/<?php echo e($tag->name); ?>">
                            <?php echo e($tag->name); ?>

                        </a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>

    <p>
        <?php echo e($post->body); ?>

    </p>
<hr>
        <h3>
            <em>Comments</em>
        </h3>
        <div class="comments">
            <ul class="list-group">
            <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item">
                    <em><?php echo e($comment->user->name); ?> :</em>&nbsp;
                    <?php echo e($comment->body); ?> &nbsp;
                    <strong><?php echo e($comment->created_at->diffForHumans()); ?> </strong>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <hr>
        <div class="card">
            <div class="card-block">
                <form method="post" action="/posts/<?php echo e($post->id); ?>/comments">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-control">
                        <textarea name="body" placeholder="Your comment here ."  class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add comment</button>
                    </div>
                </form>
                <?php echo $__env->make('layouts.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>

    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>