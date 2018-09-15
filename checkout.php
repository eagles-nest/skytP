<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="http://placehold.it/300x60?text=Logo" width="150" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container" style="margin-top: 75px;">
      <div class="row">
        <div class="col-sm-4">
          <h3>1.Billing Address</h3>
          
          <form action="pesapal.php" method="POST">
            <div class="input-group-sm mb-3">
              <input type="text" class="form-control" name="firstname" placeholder="FirstName">
          </div>
          <div class="input-group-sm mb-3">
              <input type="text" class="form-control" name="lastname" placeholder="Last Name">
          </div>
          <div class="input-group-sm mb-3">
              <input type="text" class="form-control" name="email" placeholder="Email Address">
          </div>
          <div class="input-group-sm mb-3">
              <input type="text" class="form-control" name="phonenumber" placeholder="Phone Number">
          </div>
          <div class="input-group-sm mb-3">
              <input type="text" class="form-control" name="amount" placeholder="Amount">
          </div>
          <input type="submit" name="submit" value="PESAPAL" class="btn btn-primary btn-lg btn-block btn-default">
          </form>

         
        </div>
        <div class="col-sm">
          <h3>2.Payment Method</h3>
          <a href="msape.php" class="btn btn-primary btn-lg btn-block btn-success">Lipa na M-Pesa</a>
        </div>
        <div class="col-sm">
          <h3>3.Review Your Order</h3>
          <a href="#" class="badge badge-success">BUY</a>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>
  </body>
</html>