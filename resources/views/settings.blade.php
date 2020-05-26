<!-- Esta vista aun no esta  okplementada porque se usa la vista de home pero contandra las configuraciones del usuario x -->

<div class="container">
<div class="container">
    <button type="button" class="btn btn-outline-primary">
    Editar
    <button type="button" class="btn btn-outline-succes">
        Guardar
    </button>

</div>

<form>
  <div class="form-group">
    <label for="user-email">Email </label>
    <input type="email" class="form-control" id="user-email" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">No compartiremos tu email con nadie mas</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Revisar mi perfil</label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

</div>