<!DOCTYPE html>
<html>
<head>
  <title>Register form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex"></div>

        <div class="card-body">
          <h4 class="title text-center mt-4">
            Registration
          </h4>
          <form class="form-box px-3">
          <div class="form-input">
          <span><i class="bi bi-person-square"></i></span>
              <input type="name" name="" placeholder="Enter Your Firstname" tabindex="10" required>
            </div>
            <div class="form-input">
              <span><i class="bi bi-person-square"></i></span>
              <input type="name" name="" placeholder="Enter Your Lastname" tabindex="10" required>
            </div>
            <div class="form-input">
            <span><i class="bi bi-phone"></i></span>
              <input type="Mobile" name="" placeholder="Enter Mobile Number" tabindex="10" required>
            </div>
            <div class="form-input">
              <span><i class="fa fa-envelope-o"></i></span>
              <input type="email" name="" placeholder="Email Address" tabindex="10" required>
            </div>
            <div class="form-input">
              <span><i class="fa fa-key"></i></span>
              <input type="password" name="" placeholder="Password" required>
            </div>

            <div class="mb-3">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="cb1" name="">
                <label class="custom-control-label" for="cb1">Remember me</label>
              </div>
            </div>

            <div class="mb-3">
              <button type="submit" class="btn btn-block text-uppercase">
              <a href="regsuccessful.php" class="btn btn-block text-uppercase">
                Register
              </button>
            </div>

           
            <div class="text-center mb-3">
              or login with
            </div>

            <div class="row mb-3">
              <div class="col-4">
                <a href="#" class="btn btn-block btn-social btn-facebook">
                  facebook
                </a>
              </div>

              <div class="col-4">
                <a href="#" class="btn btn-block btn-social btn-google">
                  google
                </a>
              </div>

              <div class="col-4">
                <a href="#" class="btn btn-block btn-social btn-twitter">
                  twitter
                </a>
              </div>
            </div>

            
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>