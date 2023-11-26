<!-- <?php
      include_once($_SERVER['DOCUMENT_ROOT'] . '/tallerphp18/routes.php');
      ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include_once(ROOT_PATH . 'header.php') ?>
</head>
<body>
<section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form>

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Logo</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="usuario" id="usuario" name="usuario" class="form-control form-control-lg" placeholder="ingrese usuario válido" />
                    <label class="form-label" for="usuario">Usuario</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="clave" id="clave" class="form-control form-control-lg" placeholder="Enter password" />
                    <label class="form-label" for="clave">Contraseña</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="button">Acceder</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex flex-colum flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-dark">
    <div class="text-white mb-3 mb-mb-0">
        Copyright © 2023. All rights reserved.
        <div>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-google-f"></i>
            </a>
        </div>
    </div>
  </div>
</section>
</body>
<?php include_once(ROOT_PATH . 'footer.php') ?>
</html> -->

<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/tallerphp18/routes.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <?php include_once(ROOT_PATH . 'header.php') ?>
</head>

<body>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img width="70%" height="70%" src="../../assets/images/perfil-deusuario.webp" class="img-fluid" alt="imagen usuario">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form id="formLogin" action="" method="post" autocomplete="off">
            <!-- usuario input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="usuario">Usuario</label> 
              <input type="usuario" name="usuario" id="usuario" class="formcontrol form-control-lg" placeholder="ingrese usuario" autocorrect="off" spellcheck="false" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <label class="form-label" for="clave">Contraseña</label> 
              <input type="password" name="clave" id="clave" class="formcontrol form-control-lg" placeholder="digite contraseña" autocorrect="off" spellcheck="false" />
            </div>

            <div class="text-center text-lg-start mt-4 pt-2"> <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 
2.5rem;">Acceder</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="d-flex flex-column flex-md-row text-center text-md-start justifycontent-between py-4 px-4 px-xl-5 bg-dark">
      <!-- Copyright -->
      <div class="text-white mb-3 mb-md-0"> Copyright © 2023. All rights reserved.
      </div>
      <!-- Copyright -->

    </div>
  </section>
</body>
<?php include_once(ROOT_PATH . 'footer.php') ?>

</html>