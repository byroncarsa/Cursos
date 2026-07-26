				function validarRut() {
					var rut=document.getElementById("id_rut").value;
					
					if(rut.length > 6 && rut.length < 9) {
						document.getElementById("id_rut").style.color="green";
					} else {
						document.getElementById("id_rut").focus;
						alert("Error, rut fuera de rango...");
						document.getElementById("id_rut").style.color="red";
					}
				}

				function validarLetras(e) { 
				    tecla = (document.all) ? e.keyCode : e.which; 
				    if (tecla==8) return true; //Tecla de <- (para poder borrar) 
				    patron =/[A-Z a-z]/; // Solo acepta letras 
				    te = String.fromCharCode(tecla); 
				    return patron.test(te);  
				}

				function validarNumeros(e) { 
				    tecla = (document.all) ? e.keyCode : e.which; 
				    if (tecla==8) return true; //Tecla de <- (para poder borrar) 
				    patron =/[0-9]/; // Solo acepta letras 
				    te = String.fromCharCode(tecla); 
				    return patron.test(te);  
				}

				function validarFormatoRut(e) { 
				    tecla = (document.all) ? e.keyCode : e.which; 
				    if (tecla==8) return true; //Tecla de <- (para poder borrar) 
				    patron =/[0-9 K k]/; // Solo acepta letras 
				    te = String.fromCharCode(tecla); 
				    return patron.test(te);  
				}

				function validarNombre() {
					var nombre=document.getElementById("id_nombre").value;
					
					if(nombre.length > 3 && nombre.length < 40) {
						document.getElementById("id_nombre").style.color="green";
					} else {
						document.getElementById("id_nombre").focus;
						alert("Error, nombre fuera de rango...");
						document.getElementById("id_nombre").style.color="red";
					}
				}

				function validarApellidopPaterno() {
					var apellido=document.getElementById("id_apaterno").value;
					
					if(apellido.length > 3 && apellido.length < 40) {
						document.getElementById("id_apaterno").style.color="green";
					} else {
						document.getElementById("id_apaterno").focus;
						alert("Error, apellido fuera de rango...");
						document.getElementById("id_apaterno").style.color="red";
					}
				}

				function validarApellidopMaterno() {
					var apellido=document.getElementById("id_amaterno").value;
					
					if(apellido.length > 3 && apellido.length < 40) {
						document.getElementById("id_amaterno").style.color="green";
					} else {
						document.getElementById("id_amaterno").focus;
						alert("Error, apellido fuera de rango...");
						document.getElementById("id_amaterno").style.color="red";
					}
				}
				
				function validarFecha() {
					var dia = 0;
					var mes = 0;
					var anio = 0;
					var textoError = "";
					var estado = false;
					var fecha=document.getElementById("id_fecha").value;
					
					if(fecha.length == 10) { 
						if(fecha.charAt(2) == '/' & fecha.charAt(5) == '/') {
							dia = fecha.substring(0,2).valueOf();
							mes = fecha.substring(3,5).valueOf();
							anio = fecha.substring(6,10).valueOf();
							
							if(dia < 1 | dia > 31){
								textoError = textoError+"dia, ";
								estado = true;
							}
							
							if(mes < 1 | mes > 12){
								textoError = textoError+"mes, ";
								estado = true;
							}
							
							if(anio < 1890 | anio > 2016){
								textoError = textoError+"año, ";
								estado = true;
							}
							
							if(estado==true) {
								alert(textoError+" con error...")
							} else {
								document.getElementById("id_fecha").style.color="green";
							}
						} else {
						alert("Error, no es una fecha valida, dd/mm/aaaa")
						}
					} else {
						document.getElementById("id_fecha").focus;
						alert("Error, no es una fecha valida, dd/mm/aaaa")
						document.getElementById("id_fecha").style.color="red";
					}
				}
/*
				function validarCorreo() {
					var correo=document.getElementById("id_apaterno").value;
					
					if(correo.length > 5 && correo.length < 40) {
						document.getElementById("id_apaterno").style.color="green";
					} else {
						document.getElementById("id_apaterno").focus;
						alert("Error, apellido fuera de rango...");
						document.getElementById("id_apaterno").style.color="red";
					}
				}
*/
				function validarCorreoInstitucional( email ) {
					var email=document.getElementById("id_correoi").value;
				    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				    if ( !expr.test(email) ) {
				    	document.getElementById("id_correoi").focus;
				        alert("Error: La dirección de correo " + email + " es incorrecta.");
						document.getElementById("id_correoi").style.color="red";
					} else {
						document.getElementById("id_correoi").style.color="green";
					}
				}

				function validarCorreoPersona( email ) {
					var email=document.getElementById("id_correop").value;
				    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				    if ( !expr.test(email) ) {
				    	document.getElementById("id_correop").focus;
				        alert("Error: La dirección de correo " + email + " es incorrecta.");
						document.getElementById("id_correop").style.color="red";
					} else {
						document.getElementById("id_correop").style.color="green";
					}
				}

				function validarFonoFijo(){
				  var numeroTelefono=document.getElementById('id_fonofijo');
				  var expresionRegular1=/^([0-9]+){9}$/;//<--- con esto vamos a validar el numero
				  var expresionRegular2=/\s/;//<--- con esto vamos a validar que no tenga espacios en blanco
				 
				  if(numeroTelefono.value=='')
				     alert('campo es obligatorio');
				  else if(expresionRegular2.test(numeroTelefono.value))
				    alert('error existen espacios en blanco');
				  else if(!expresionRegular1.test(numeroTelefono.value))
				    alert('Numero de telefono incorrecto');
				}

				function validarFonoMovil(){
				  var numeroTelefono=document.getElementById('id_fonomovil');
				  var expresionRegular1=/^([0-9]+){9}$/;//<--- con esto vamos a validar el numero
				  var expresionRegular2=/\s/;//<--- con esto vamos a validar que no tenga espacios en blanco
				 
				  if(numeroTelefono.value=='')
				     alert('campo es obligatorio');
				  else if(expresionRegular2.test(numeroTelefono.value))
				    alert('error existen espacios en blanco');
				  else if(!expresionRegular1.test(numeroTelefono.value))
				    alert('Numero de telefono incorrecto');
				}

				