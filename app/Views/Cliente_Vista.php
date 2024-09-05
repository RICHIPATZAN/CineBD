
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Clientes</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

  
</head>
<body>
<div class="container mt-4">
    <p><h1>CLIENTES</h1></p>
    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url ('/user-form') ?>" class="btn btn-primary">Agregar Usuario</a>
    </div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>

    <table class="table table-bordered table-striped" id="users-list">
       <thead>
       </tbody>
       
          <tr>
             <th>Codigo Cliente</th>
             <th>Nombre</th>
             <th>Apellido</th>
             <th>Fecha de Nacimiento</th>
             <th>Fecha de Suscripcion</th>
             <th>Correo Electronico</th>
             <th>Telefono Movil</th>
             <th>Opciones</th>
          </tr>
          
       
       <tbody>
       </thead>
       <?php if($Clientes): ?>
         <?php foreach ($Clientes as $Cliente):?>
       <tr>
             <td><?php echo $Cliente['cliente_id']; ?></td>
             <td><?php echo $Cliente['nombre']; ?></td>
             <td><?php echo $Cliente['apellido']; ?></td>
             <td><?php echo $Cliente['fecha_nacimiento']; ?></td>
             <td><?php echo $Cliente['fecha_suscripcion']; ?></td>
             <td><?php echo $Cliente['correo_electronico']; ?></td>
             <td><?php echo $Cliente['telefono_movil']; ?></td> 
             <td>
             <a href="<?php echo site_url('edit-view/'.$Cliente['cliente_id']);?>" class="btn btn-outline-primary btn-sm">Editar</a>
              <a href="<?php echo site_url('delete/'.$Cliente['cliente_id']);?>" onclick="return confirmDelete()"class="btn btn-outline-danger btn-sm">Eliminar</a>

              </td>
       </tr>

       <?php endforeach; ?>
       <?php endif; ?>

<script type="text/javascript">
    function confirmDelete() {
        return confirm("¿Estás seguro de que deseas eliminar este registro?");
    }
</script
       

       </tbody>
</table>
</div>


</body>
</html>