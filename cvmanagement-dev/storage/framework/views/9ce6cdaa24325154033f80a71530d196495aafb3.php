
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rhizome CV Database</title>
    <link href="<?php echo e(asset('css/assets/global/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
             <a href=" ">
                <img src="/logo/rhizome.jpg" alt="Logo" width="150px" height="50px" /> </a>
                <div class="title m-b-md">
                    Rhizome CV-Mgt
                </div>
                <div class="links">
                    <a href="<?php echo e(url('usermanual')); ?>" >Documentation</a>
                    <a href="">Navigatiions</a>
                    <a href="">Site Map</a>
                    <a href="">Help</a>
                </div>
                <br>
                <p></p> 
                 <?php if(Route::has('login')): ?>
                <div class="">
                    <?php if(Auth::check()): ?>

                        <?php if(Auth::user()->is_admin()): ?>
                            <a class="btn btn-primary" href="<?php echo e(url('/board')); ?>">Home</a>

                        <?php else: ?>
                            <a class="btn btn-primary" href="<?php echo e(url('/home')); ?>">Home</a>

                        <?php endif; ?>
           
                    <?php else: ?>
           <a  class="btn btn-primary" href="<?php echo e(url('/login')); ?>">Login</a>
                        <!--  <a href="<?php echo e(url('/register')); ?>">Register</a>  -->
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </body>
</html>
