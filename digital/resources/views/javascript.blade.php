<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title></title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style media="screen">
      .vh-100{
        height: 100vh;
      }
    </style>
  </head>
  <body>
    <div class="d-flex justify-content-center align-items-center vh-100 bg-white text-primary">
      <form id="formulario" novalidate autocomplete="off">

          <div class="form-group col text-center">
            <label>Nombre</label>
            <input type="text" class="form-control" value="" name="nombre">
            <div class="valid-feedback">
              Campo Valido
            </div>
            <div class="invalid-feedback"></div>
          </div>
          <div class="form-group col text-center">
            <label>Apellido</label>
            <input type="text" class="form-control" value="" name="apellido">
            <div class="valid-feedback">
              Campo Valido
            </div>
            <div class="invalid-feedback"></div>
          </div>

          <div class="form-group col text-center">
            <label>Edad</label>
            <input type="text" class="form-control" value="" name="edad">
            <div class="valid-feedback">
              Campo Valido
            </div>
            <div class="invalid-feedback"></div>
          </div>

          <div class="form-group col text-center">
            <label>Email</label>
            <input type="email" class="form-control" value="" name="email">
            <div class="valid-feedback" >
              Campo Valido
            </div>
            <div class="invalid-feedback"></div>
          </div>

          <div class="form-group col text-center">
            <label>Contraseña</label>
            <input type="password" class="form-control" value="" name="password">
            <div class="valid-feedback">
              Campo Valido
            </div>
            <div class="invalid-feedback"></div>
          </div>

          <div class="form-group col text-center">
            <label>Confirmar Contraseña</label>
            <input type="password" class="form-control" value="" name="repassword">
            <div class="valid-feedback">
              Campo Valido
            </div>
            <div class="invalid-feedback"></div>
          </div>
      </form>
    </div>
      <script src="{{ asset('js/javascript.js') }}"></script>
  </body>
</html>
