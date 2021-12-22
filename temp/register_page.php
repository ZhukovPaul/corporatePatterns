
<!doctype html>
<html lang="en">
  <head>
  <base   href="https://getbootstrap.com/docs/5.1/examples/sign-in/"></base>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>

  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    

    <!-- Bootstrap core CSS -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="view-source:https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet"  >

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center container">
    <?print_r($arResult);?>
<main class="form-signin  ">
  <form action="http://test.ru/reg.php" method="GET" >
    <img class="mb-4" src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

    <div class="form-floating">
      <input type="text" name="name" class="form-control" id="nameInput" value="<?=$_REQUEST["name"]?>" placeholder="Alex U">
      <label for="nameInput">Name</label>
    </div>
    <div class="form-floating">
      <input type="text" name="login" class="form-control" id="loginInput" value="<?=$_REQUEST["login"]?>" placeholder="Test user">
      <label for="loginInput">Login</label>
    </div>
    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" value="<?=$_REQUEST["email"]?>" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="pass" class="form-control" id="floatingPassword" value="<?=$_REQUEST["pass"]?>" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <?/*<div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>*/?>
    <button class="w-100 btn btn-lg btn-primary" name="register" value="Y" type="submit">Sign up</button>
    
  </form>
</main>


    
  </body>
</html>
