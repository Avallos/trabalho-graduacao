<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>


      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="../banco/login.php" method="post">
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Login" required="" id="login" name="login" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Senha" required="" id="senha" name="senha" />
              </div>
              <div>
                <button class="btn btn-default submit" type="submit">Log in</button>
                <a class="reset_pass" href="recuperarSenha.php">Recuperar Senha</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-truck"></i>  Tranjato</h1>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
