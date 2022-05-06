<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <title>Document</title>
    

     <style>
    body{
  background: #f7ff00;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #f6ff00be, #ff0000cf);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #f6ff00be, #ff0000cf); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
</style>

</head>
<body>

<div class="container mt-3">

  
  <center>
  <h3>Iniciar sesion</h3>
  <h6>Zisu</h6>
    <img src="css/logo.svg"    style=  " width: 100px;
    height: 100px;">
 
  </center> 
  <form action="validar.php"  method="post"   class="was-validated">
    <div class="mb-3 mt-3">
      <label  class="form-label">Username:</label>
      <input type="text" class="form-control"  placeholder="Enter username" name="usuario" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label  class="form-label">Password:</label>
      <input type="password" class="form-control"  placeholder="Enter password" name="contraseña" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
      <label class="form-check-label" for="myCheck">estoy de acurdo </label>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
 
</body>
</html>