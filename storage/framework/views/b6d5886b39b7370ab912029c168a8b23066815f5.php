<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <section class="content-header">
                <?php if(session()->has('flash_notification.message')): ?>
                    <div class="alert alert-<?php echo e(session('flash_notification.level')); ?>">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                        <?php echo session('flash_notification.message'); ?>

                    </div>
                <?php endif; ?>
            </section>
        </div>
    </div>
</div>    