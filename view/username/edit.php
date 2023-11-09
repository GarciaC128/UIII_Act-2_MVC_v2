<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/menuControlador.php");
    $obj = new menuControlador();
    $user = $obj->show($_GET['id']);
?>
  <form action="update.php" method="post"  enctype="multipart/form-data" autocomplete="off">
    <h2>Modificando Registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id_platillo" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Nombre de platillo</label>
        <div class="col-sm-10">
            <input type="text" name="platillo" class="form-control" id="inputPassword" value="<?= $user[1]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva descripcion</label>
        <div class="col-sm-10">
            <input type="text" name="descripcion" class="form-control" id="inputPassword" value="<?= $user[2]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo precio</label>
        <div class="col-sm-10">
            <input type="number" name="precio" class="form-control" id="inputPassword" value="<?= $user[3]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevos ingredientes</label>
        <div class="col-sm-10">
            <input type="text" name="ingredientes" class="form-control" id="inputPassword" value="<?= $user[4]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva categoria</label>
        <div class="col-sm-10">
            <input type="text" name="categoria" class="form-control" id="inputPassword" value="<?= $user[5]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevas calorias</label>
        <div class="col-sm-10">
            <input type="text" name="calorias" class="form-control" id="inputPassword" value="<?= $user[6]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva imagen</label>
        <div class="col-sm-10">
            <input type="file" name="imagen" class="form-control"  value=""><img width="50" src="data:image/jpeg;base64,<?= base64_encode($user[7]); ?>" alt="Descripción de la imagen">
        </div>
    </div>

    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
  </form>
<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>