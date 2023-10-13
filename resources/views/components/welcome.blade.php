<div class="container">
    <h1 class="form-title">Crear un nuevo producto</h1>
    <form action="" method="POST" enctype="multipart/form-data" class="custom-form">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" class="form-control" rows="4"></textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="imagen">Imagen:</label>
                <input type="file" name="imagen" id="imagen" class="form-control-file">
            </div>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <select name="estado" id="estado" class="form-control">
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="stock">Stock:</label>
                <input type="text" name="stock" id="stock" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="codigo_producto">Código de Producto:</label>
                <input type="text" name="codigo_producto" id="codigo_producto" class="form-control">
            </div>
        </div>
        <button type="submit" class="btn btn-primary form-button">Guardar</button>
    </form>
</div>


<style>
    .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ddd;
    background-color: #f5f5f5;
}

.form-title {
    font-size: 24px;
    margin-bottom: 20px;
}

.custom-form {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-group {
    margin-bottom: 15px;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

.form-row {
    display: flex;
    justify-content: space-between;
}

.form-button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

.form-button:hover {
    background-color: #0056b3;
}

</style>