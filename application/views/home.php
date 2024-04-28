<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>User Management</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="resources/css/style.css">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Home Page</a>
</nav>

<div class="myclass">
<h1>User Management System</h1>
<hr>
</div>

<div class="container">
  <section class="mx-auto my-5" style="max-width: 23rem;">
      
    <div class="card testimonial-card mt-2 mb-3">
      <div class="card-up aqua-gradient"></div>
      <div class="avatar mx-auto white">
        <img src="resources/Images/userlogin.jpg" class="rounded-circle img-fluid"
          alt="woman avatar">
      </div>
      <div class="card-body text-center">
        <h4 class="card-title font-weight-bold">User Login</h4>
        <hr>
        <button class="btn btn-primary"><a href="<?php echo base_url();?>User/index">Click here</a></button>

      </div>
    </div>
    
  </section>
  <section class="mx-auto my-5" style="max-width: 50rem;">
      
    <div class="card testimonial-card mt-2 mb-3">
      <div class="card-up aqua-gradient"></div>
      <div class="avatar mx-auto white">
        <img src="resources/Images/userlogin.jpg" class="rounded-circle img-fluid"
          alt="woman avatar">
      </div>
      <div class="card-body text-center">
        <h4 class="card-title font-weight-bold">Admin Login</h4>
        <hr>
        <button class="btn btn-primary"><a href="#">Click here</a></button>
      </div>
    </div>
    
  </section>
</div>


</body>
</html>
