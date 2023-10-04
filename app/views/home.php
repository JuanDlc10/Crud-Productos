<div class="vh-100 d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-8 col-lg-6">
        <div class="border border-3 border-success"></div>
        <div class="card bg-white">
          <div class="card-body p-5">
            <form class="mb-3 mt-md-4">
              <h2 class="fw-bold mb-2 text-uppercase ">Crud de productos</h2>
              <p class="mb-3" >Este sistema te permitira llevar el control de una tienda de productos.</p>
              <p class="mb-3 text-center fw-bold text-uppercase" >Iniciar sesion</p>
              <div class="mb-3">
                <label for="user" class="form-label ">Usuario</label>
                <input type="email" class="form-control" id="user" placeholder="usuario@example.com">
              </div>
              <div class="mb-3">
                <label for="pass" class="form-label ">Contraseña</label>
                <input type="password" class="form-control" id="pass" placeholder="*******">
              </div>
             
              <div class="d-grid">
              <button class="btn btn-outline-dark" id="logIn" >iniciar sesion</button>
              </div>
            </form>
            <div>
              <p class="mb-0  text-center">No tienes una cuenta? 
                <a href="./sigIn" class="text-primary fw-bold">Registrar</a>
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php
    require "./app/controller/logIn.controller.php"
?>
