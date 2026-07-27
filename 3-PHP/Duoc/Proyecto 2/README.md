<h1>Proyecto 2</h1>
<p>Crear un mantenedor de funcionarios con PHP y  MySQL, debe aplicar todo lo aprendido (jQuery, HTML5, JavaScript, CSS, etc.):</p>

<ol>
  <li>Crear un script con lo siguiente:</li>
    <ol>  
      <li>Base de datos empresa</li>
      <li>
        Tabla Colaborador, campos: 
          <ul>
            <li>rut varchar(10), </li>
            <li>nombres varchar(20), </li>
            <li>apellidoPaterno varchar(20), </li>
            <li>apellidoMaterno varchar(20), </li>
            <li>fechaDeNacimiento Date, </li>
            <li>correoInstitucional varchar(50), </li>
            <li>correoPersona varchar(50), </li>
            <li>fonoFijo varchar(15), </li>
            <li>fonoMovil varchar(15), </li>
            <li>dirección varchar  (50), </li>
            <li>id_region int, </li>
            <li>id_provincia int, </li>
            <li>id_comuna int, </li>
            <li>fechaDeContrato Date,</li>
            <li>tipoDeContrato varchar(15), </li>
            <li>nombreFoto varchar(30). </li>
          </ul>
        </li>
        <li>Agregar 10 registros.  Crear la carpeta fotosColaboradores y agregar las 10 fotos. </li>
    </ol>
</br>
  <li>Crear un CRUD con acceso a base de datos MySQL con PHP. Debe considerar los botones:   Agregar, buscar, eliminar, modificar y listar. </li>
</br>
  <li>
    Validaciones: 
    <ol>
      <li> Los datos ingresados no deben superar el largo de los campos de la tabla.</li>
      <li>Los datos ingresados deben ser del mismo tipo de los campos de la tabla.   Ej.:   En el nombre no puede ingresar números.</li>
      <li>Rut, validar largo 10 caracteres y debe tener datos. </li>
      <li>Usar campo Email de HTML5. </li>
      <li>No debe haber campos vacíos. </li>
    </ol>
  </li>
</br>
  <li>Filtros para Región, Provincia y Comuna. </li>
</br>
  <li>Leer foto desde archivo.  La idea es pinchar un botón, buscar una foto en el sistema de archivos (explorador), una vez seleccionada guardar el nombre del archivo en el campo del formulario y la foto en la carpeta “fotosColaboradores”. </li>
</br>
  <li>Uso de Ajax.  Usar los elementos de Ajax para refrescar el formulario y poder mostrar el listar, buscar, modificar en el mismo formulario. </li>
</br>
  <li>Botones especiales:   a)  “Imprimir Ficha en PDF”  y   b) “Imprimir Ficha en Excel”.  La ficha corresponde a todos los datos del actual formulario en PDF o XLS, en forma ordenada y con foto.  </li>
</ol>
