 <h2 class="text-center">Formulario de Contacto</h2>
 
 
 <form style="height: 70vh;" action="guardar.php"  method="POST" class="col-6 mx-auto">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email:</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nombre:</label>
    <input type="text" name="nombre" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Telefono:</label>
    <input type="number" name="numero" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-success">Enviar</button>
</form>