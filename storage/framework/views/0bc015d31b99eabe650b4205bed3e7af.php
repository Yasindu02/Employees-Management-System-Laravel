<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title text-center">Login</h1>
                </div>
                <div class="card-body">
                    <?php if(Session::has('error')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo e(Session::get('error')); ?>

                    </div>
                    <?php endif; ?>
                    <form action="<?php echo e(route('login')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label><h6>Email:</h6></label>
                            <input type="text" name="email" class="form-control"  placeholder="Enter Your Email" >
                        </div>
                        <div class="mb-3">
                            <label><h6>Password:</h6></label>
                            <input type="password" name="password" class="form-control"  placeholder="Enter Your Password" >
                        </div>
                        
                        <div class="mb-3">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary"><b>Login</b></button><br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\ACER\Desktop\Project Laravel\Employeems\employee-app\resources\views/login.blade.php ENDPATH**/ ?>