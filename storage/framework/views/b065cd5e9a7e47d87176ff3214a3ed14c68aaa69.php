 
<?php $__env->startSection('content'); ?>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      Laravel Starter
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg"><?php echo e(__('Register')); ?></p>

        <form action="<?php echo e(route('register')); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="input-group mb-3">
            <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" placeholder="Enter Your Full Name"
              required autofocus> <?php if($errors->has('name')): ?>
            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span> <?php endif; ?>
            <div class="input-group-append">
              <span class="fa fa-user input-group-text"></span>
            </div>
          </div>
          <div class="input-group mb-3">
            <input id="email" type="email" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" placeholder="Your E Mail Address">
            <div class="input-group-append">
              <span class="fa fa-envelope input-group-text"></span> <?php if($errors->has('email')): ?>
              <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($errors->first('email')); ?></strong>
                  </span> <?php endif; ?>
            </div>
          </div>
          <div class="input-group mb-3">
            <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" placeholder="Password" required>
            <div class="input-group-append">
              <span class="fa fa-lock input-group-text"></span>
            </div>
          </div>
          <div class="input-group mb-3">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmation Password" required>
            <div class="input-group-append">
              <span class="fa fa-lock input-group-text"></span> <?php if($errors->has('password')): ?>
              <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($errors->first('password')); ?></strong>
                  </span> <?php endif; ?>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-primary">
              <i class="fab fa-facebook-f mr-2"></i>
              Sign up using Facebook
            </a>
          <a href="#" class="btn btn-block btn-danger">
              <i class="fab fa-google-plus-g mr-2"></i>
              Sign up using Google+
            </a>
        </div>

        <a href="<?php echo e(route('login')); ?>" class="text-center">I already have a membership</a>
      </div>
      <!-- /.form-box -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.register-box -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>