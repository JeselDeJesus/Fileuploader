<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1> Registration Form </h1>
    
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Complete Name:</label>
    <div class="col-sm-4">
      <input class="form-control" type="text" placeholder="Complete Name" id="Cname" aria-label="default input example">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email Address:</label>
    <div class="col-sm-4">
      <input class="form-control" type="text" placeholder="Email Address" id="EAddress" aria-label="default input example">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Password:</label>
    <div class="col-sm-4">
      <input class="form-control" type="text" placeholder="Password" id="Password" aria-label="default input example">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Confirm Password:</label>
    <div class="col-sm-4">
      <input class="form-control" type="text" placeholder="Confirm Password" id="CPassword" aria-label="default input example">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Picure:</label>
      <div class="col-sm-4">
        <input class="form-control" type="file" id="PFile">
      </div>
  </div>

  <div class="d-grid gap-2 col-4">
  <button class="btn btn-primary" type="button">Submit Registration</button>
  </div>

  </body>
</html>