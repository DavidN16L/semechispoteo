
<!DOCTYPE html>
<html>
<head>
  <title>Administrador</title>
  <link rel="stylesheet" type="text/css" href="admin.css?v=<?php echo time(); ?>">


        <script language="JavaScript">
function pregunta(){
    if (confirm('¿Estas seguro de enviar este formulario?')){
       document.tuformulario.submit()
    }
}
</script>
</head>
<body >

  <form method="POST" name="form-work" action="guardar.php">
      <h1>Subir comidas </h1>
      <label for="">Producto: </label>
      <select name="productoimg" id="">

        <option  value="https://image.flaticon.com/icons/png/512/870/870202.png">Hamburguesa</option>
 
        <option  value="https://image.flaticon.com/icons/png/512/1785/1785788.png">Perro</option>

        <option  value="https://image.flaticon.com/icons/png/512/3082/3082041.png">Morronga</option>

        <option value="https://image.flaticon.com/icons/png/512/3530/3530302.png">Desgranado</option>

        <option  value="https://image.flaticon.com/icons/png/512/3452/3452868.png">La Vecindad Del Chavo</option>

        <option value="https://image.flaticon.com/icons/png/512/620/620744.png">Menu infantil</option>

        <option value="https://image.flaticon.com/icons/png/512/1139/1139982.png">Menu sorpresa infantil</option>

        <option  value="https://image.flaticon.com/icons/png/512/1665/1665731.png">Adicional</option>

        <option  value="https://image.flaticon.com/icons/png/512/1002/1002123.png">Bebida</option>
      </select>
   <label for="">Imagen (Que coincida con el producto): </label>
      <select name="productoid" id="">

        <option  value="1">Hamburguesa</option>

        <option  value="2">Perro</option>

        <option  value="3">Morronga</option>

        <option value="4">Desgranado</option>

        <option  value="5">La Vecindad Del Chavo</option>

        <option value="6">Menu infantil</option>

        <option value="7">Menu sorpresa infantil</option>

        <option  value="8">Adicional</option>

        <option  value="9">Bebida</option>
    </select>
      <label for="">Precio: </label>
      <input type="text" name="precio">
      <label for="">Nombre del producto: </label>
      <input type="text" name="nombre">
      <label for="">Descripción: </label>
      <input type="text" name="descripcion">
      <input type="submit"  onclick="pregunta()"  name="susub">



    </form>
    <a href="index.php">Clic Para Volver</a>
</body>
</html>


