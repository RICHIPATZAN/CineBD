
<!DOCTYPE html>
<html>
<head>
  <title>CLIENTES</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <style>
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>
<div class="container">
    <p><h1>Clientes</h1></p>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <form method="post" id="add_create" name="add_create" action="<?= site_url('/submit-form') ?>">
              <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control">
              </div>
              <div class="form-group">

                <label>Apellido</label>
                <input type="text" name="apellido" class="form-control">
              </div>
              <div class="form-group">
                
              <label>Fecha de nacimiento</label>
                <input type="text" name="fecha_nacimiento" class="form-control">
              </div>
              <div class="form-group">

              <label>Fecha de Suscripcion</label>
                <input type="text" name="fecha_suscripcion" class="form-control">
              </div>
              <div class="form-group">

              <label>Correo Electronico</label>
                <input type="text" name="correo_electronico" class="form-control">
              </div>
              <div class="form-group">

              <label>Telefono Movil</label>
                <input type="text" name="telefono_movil" class="form-control">
              </div>
              <div class="form-group">
              
              <br/>
                <button type="submit" class="btn btn-primary btn-block">Agregar</button>
              </div>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          nombre: {
            required: true,
          },
          apellido: {
            required: true,
          },

          fecha_nacimiento: {
            required: true,
          },

          fecha_suscripcion: {
            required: true,
          },

          correo_electronico: {
            required: true,
            maxlength: 60,
            email: true,
          },

          telefono_movil: {
            required: true,
          },
        },
        messages: {
          nombre: {
            required: "Campo Obligatorio",
          },

          apellido: {
            required: "Campo Obligatorio",
          },


          fecha_nacimiento: {
            required: "Campo Obligatorio.",
          },

          fecha_suscripcion: {
            required: "Campo Obligatorio.",
          },
          correo_electronico: {
            required: "Campo Obligatorio",
            email: "no es una direccion de correo valida.",
            maxlength: "El nombre es demasido Largo.",
          },

            telefono_movil: {
            required: "Campo Obligatorio.",

          },
        },
      });
    }
  </script>
</body>
</html>