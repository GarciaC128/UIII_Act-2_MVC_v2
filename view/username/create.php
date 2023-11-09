<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
?>


    <form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label"> ID de platillo</label>
        <div class="col-sm-10">
            <input type="text" name="id_platillo" class="form-control" id="inputPassword" >
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label"> Nombre de platillo</label>
        <div class="col-sm-10">
            <input type="text" name="platillo" class="form-control" id="inputPassword" >
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Descripcion</label>
        <div class="col-sm-10">
            <input type="text" name="descripcion" class="form-control" id="inputPassword" >
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Precio</label>
        <div class="col-sm-10">
            <input type="number" name="precio" class="form-control" id="inputPassword" >
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Ingredientes</label>
        <div class="col-sm-10">
            <input type="text" name="ingredientes" class="form-control" id="inputPassword" >
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Categoria</label>
        <div class="col-sm-10">
            <input type="text" name="categoria" class="form-control" id="inputPassword">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Calorias</label>
        <div class="col-sm-10">
            <input type="text" name="calorias" class="form-control" id="inputPassword" >
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Imagen</label>
        <div class="col-sm-10">
            <input type="file" name="imagen" class="form-control" id="inputPassword" >
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>

<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>