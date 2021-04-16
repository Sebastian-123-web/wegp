<?php
  include 'views\partials\header.php';
 ?>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="card bg-dark">
            <div class="card-body">
              <div class="d-flex justify-content-center mb-3">
                <img src="public\img\icono.png" alt="">
              </div>
              <h4 class="text-center text-light mb-5">Bienvenido</h4>
              <form class="">
                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text btn-pill text-dark"><i class="fas fa-user"></i></span>
                  </div>
                  <input type="text" class="form-control btn-pill" placeholder="Usuario">
                </div>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text btn-pill text-dark"><i class="fas fa-key"></i></span>
                  </div>
                  <input type="password" class="form-control btn-pill" placeholder="Contraseña">
                </div>
                <div class="mb-4">
                  <a href="" class="">Olvide mi contraseña?</a>
                </div>
                <button type="button" class="form-control d-block bg-danger text-light btn-pill">Ingresar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
  include 'views\partials\footer.php';
?>
