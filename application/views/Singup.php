<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .col-6{
            display:flex;
        }
        #fname{
            width:98%;
        }
        body{
            background:black;
        }
        #password{
            width:98%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <div class="card" style="margin-top:10px;">
                <div class="card-header text-center">
                    <h3>Register</h3>
                </div>
                <div class="card-body">
                <form method="post" action="<?=base_url('Welcome/RegistrationUser')?>">
                        <div class="col-6">
                        <div class="col-12">
                            <label for="exampleInputEmail1" class="form-label">First Name</label>
                            <input type="text" class="form-control" placeholder="FirstName" name="fname" id="fname" aria-describedby="emailHelp">
                        </div>
                        <div class="col-12">
                            <label for="exampleInputEmail1" class="form-label">Last Name</label>
                            <input type="text" class="form-control" placeholder="LastName" id="lname" name="lname" aria-describedby="emailHelp">
                        </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
                            <input type="text" class="form-control" placeholder="Mobile Number" id="mobilenumber" name="mobilenumber" aria-describedby="emailHelp">
                        </div>
                        <div class="col-6">
                            <div class="col-12">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                            </div>
                            <div class="col-12">
                                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" id="exampleInputPassword1">
                            </div>
                        </div><br><br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" style="width: 100%;">Register Now</button><br><br>
                            <a href="<?php echo base_url();?>User/index">Login Page</a>
                        </div>
                </form>
                </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>