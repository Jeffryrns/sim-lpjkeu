 
<?php $__env->startSection('content'); ?>
<body class="<?php echo e(Request::path() == 'login' ? 'background-image' : ''); ?>">
<div class="login-box">
    <div class="login-logo">
        SIM-LPJKEU
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg"><?php echo e(__('Login')); ?></p>
            <form action="<?php echo e(route('login')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="input-group mb-3">
                    <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                    <div class="input-group-append">
                        <span class="fa fa-envelope input-group-text"></span> <?php if($errors->has('email')): ?>
                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span> <?php endif; ?>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
                    <div class="input-group-append">
                        <span class="fa fa-lock input-group-text"></span> <?php if($errors->has('password')): ?>
                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span> <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="checkbox icheck">
                            <label>
                <input type="checkbox"> Remember Me
              </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

           <!-- <div class="social-auth-links text-center mb-3">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook-f mr-2"></i> Sign in using Facebook
        </a>
                <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus-g mr-2"></i> Sign in using Google+
        </a>
            </div>-->
            <!-- /.social-auth-links -->

            <p class="mb-1">
                <a href="#">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="<?php echo e(route('register')); ?>" class="text-center">Register a new membership</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
</body>
<!-- /.login-box -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>