<h1> Peroyecto 1</h1>

</br>

<p>Diseñar un sitio web para una empresa que desea entrar al mercado de las ventas online.  Los requerimientos son los siguientes: </p>

<ol>
<li>
 Crear una carpeta con su nombre y apellido, dentro de esta crear las carpetas: “jq”, “js”,”css” y ”fotos”, todas en el mismo nivel.  Todos los archivos .html deben crearse en la raíz de la carpeta del proyecto.
</li>

</br>

<li>
 Crear el diseño de un sitio con tag de HTML5 header, nav, section, footer. Recuerde que si cambiamos las dimensiones de la ventana, el sitio se debe adaptarse a la nueva configuración. Debe proponer un tema al profesor y enfocar su proyecto en eso. 
</li>

</br>

<li>
 El tag header debe contener El nombre de la empresa con su logo y en la esquina superior derecha la fecha actual, elemento proporcionado por JS a un div. 
</li> 

</br>

<li>
 El tag nav corresponde al menú y debe contener las siguientes opciones: Misión, Nuestros Productos, Contáctenos, Regístrese y Login. Este menú debe tener el efecto de resalte utilizando CSS.   Cada opción corresponde a una página HTML que se debe insertar dentro del tag section, con excepción de la opción Login, que ya explicaremos su función. 
</li>

</br>

<li>
 La página home.html es el primer elemento que debe aparecer en el tag section.  Esta página debe contener una galería de 5 imágenes de productos, usted debe seleccionar el tipo de efecto a utilizar con jQuery: Magic Slider,  Carouel, Responsive Slider, etc. 
</li>

</br>

<li>
 El retorno de todas las páginas (link volver) debe ubicarse en el tag section página home.html.
</li> 

</br>

<li>
 Misión.html, esta página debe estar formateada como “Plantilla”, de tal manera que los lunes y viernes cambie automáticamente el color de fondo, fuente y tamaño. 
</li>

</br>

 <li>
  Productos.html, esta página debe mostrar 10 productos con su foto y precio dentro de una tabla.  
 </li>

</br>

<li>
 Contáctenos.html,  esta página debe simular el envío  de un mail al webMaster. Los campos requeridos son: 
  <ul>
      <li>Rut, validar largo 9 caracteres y debe tener datos. </li>

<li>Nombre, validar largo entre 5 y 30 caracteres, debe tener datos.  </li>

<li>Email, validar que entre sus caracteres se encuentre un @ y al menos un punto. </li> 

<li>Fono, validar que sean solo números con un largo igual a 9.  </li>

<li>Texto, validar que la cantidad de caracteres sea mayor que 1 y menor que 120.  </li>

<li>RECUERDE: Todas son validaciones MANUALES, sin  usar los nuevos atributos de HTML5 y deben realizarse con funciones de JS y los eventos correspondientes.  </li>
  </ul>

</li>

</br>

<li>
 Registrese.html, esta página pide datos básicos de un cliente y los graba en un vector en JS, de tal manera que cuando se logee, el usuario y contraseña lo busque en dicho vector.  Los campos requeridos son: rut, nombre, fono, usuario y contraseña, estos dos últimos con un rango mínimo de 6 y máximo 10 caracteres alfanuméricos.  Puede usar las características de HTML5.  
</li>

</br>

<li>
 Login, esta no es una página, es un texto con efecto especiales de menú, requerido anteriormente. Al seleccionar Login se activa un <div> en el área del <header>, que muestra un pequeño formulario con:  Usuario y contraseña.  Al pinchar el botón  “Aceptar”, revisa si esos datos se encuentran en el vector, si es así desaparece el formulario y queda el nombre del usuario en ese  <div> y la opción Login debe cambiar a Logout.  Al pinchar Logout  vuelve a aparecer Login y desaparece el <div> con el nombre del usuario.  Si el usuario no existe,  abra una ventana acusando el error y sugiera registrarse. 
 </li>
  
</ol>
