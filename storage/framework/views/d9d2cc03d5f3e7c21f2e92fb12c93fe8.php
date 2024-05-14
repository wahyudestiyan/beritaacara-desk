<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>BA - Login</title>
  <!-- Custom fonts for this template-->
  <link href="<?php echo e(asset('admin_assets/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="<?php echo e(asset('admin_assets/css/sb-admin-2.min.css')); ?>" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login <br> Berita Acara Pemenuhan Data</h1>
                  </div>
                  <form action="<?php echo e(route('login.ba')); ?>" method="POST" class="user">
                   <?php echo csrf_field(); ?>
                    <?php if($errors->any()): ?>
                      <div class="alert alert-danger">
                          <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </ul>
                      </div>
                    <?php endif; ?>
                    <div class="form-group">
                      <input name="nip" type="nip" class="form-control form-control-user" id="exampleInputNip" placeholder="Masukan NIP">
                    </div>
                    <div class="form-group">
                      <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input name="remember" type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember
                          Me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-user">Login</button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?php echo e(route('register')); ?>">Daftar sebagai Pemeriksa!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo e(asset('admin_assets/vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo e(asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?php echo e(asset('admin_assets/js/sb-admin-2.min.js')); ?>"></script>
</body>
</html><?php /**PATH E:\DESTIYAN\LATIHAN LARAVEL\BERITA ACARA DESK APP\beritaacara-desk\resources\views/auth/login.blade.php ENDPATH**/ ?>