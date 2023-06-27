<?php
session_start();
$error = '';

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin@email.co' && $password == '123456') {
      $_SESSION['login_user'] = $username;
        header("location: form_surat.php");
    }else{
      echo "<script>alert('Username atau Password Salah!');document.location='login.php';</script>";
    }
  }

?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="css/style2.css">
</head>

<body class="img js-fullheight" style="background-image: url(images/uniw.jpg);">
  </style>
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
          <h1 class="heading-section">Welcome</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 col-xl-6 col-xxl-4">
          <div class="card">
            <div class="card-body">
              <h3 class="mb-4 text-center">Masukkan Username dan Passwoord</h3>
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="signin-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Username" name="username" required>
                </div>
                <div class="form-group">
                  <input id="password-field" type="password" class="form-control" placeholder="Password" name="password" required>
                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control submit btn-primary submit px-3" name="submit">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>