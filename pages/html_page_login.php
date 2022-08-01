<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>login</title>
</head>

<body>

  <?php
  if ($errors ?? false) :
  ?>
    <div class="alert alert-danger" role="alert">
      <?php 
          foreach ($errors as $error) {
            echo "$error";
          }
      ?>
    </div>
  <?php
  endif;
  ?>
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Simple Chat</span>
          </div>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-6">
        <form action="/login" method="POST" autocomplete="off">
          <div class="mb-3">
            <label for="login" class="form-label">Login</label>
            <input type="text" class="form-control" id="login" placeholder="login" name="login" autocomplete="off">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="password" name="password" autocomplete="off">
            <button class="btn btn-primary" type="submit">login</button>
          </div>
        </form>
      </div>
    </div>
    <div class="row">
    <div class="col-xl-3">

    <div class="text-justify">or </div><div><a href="/signup" class="btn btn-primary stretched-link">Sign Up</a></div>
    </div>

    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>