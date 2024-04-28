<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="resources/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

    <title>login</title>
    <style>
        body{
            background: rgb(20, 20, 20);
        }
        a{
            text-decoration:none;
        }
        a:hover{
            text-decoration: underline;

        }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row">
        <div class="col-md-4"></div>
            <div class="col-md-4">
            <div class="card" style="margin-top: 20px;">
                <div class="card-header text-center">
                    <h3>Login</h3>
                </div>
                <div class="card-body">
                <form method="post" action="<?=base_url('Welcome/Login')?>">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="email" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="password" name="password" id="password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Login</button><br><br>
                        <a href="<?= base_url('Welcome/Singup'); ?>" class="register">Register a Account</a><br>
                        <a href="<?= base_url(); ?>">Back to Home Page</a>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>