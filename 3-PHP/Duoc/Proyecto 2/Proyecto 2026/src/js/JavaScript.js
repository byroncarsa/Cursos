function FechaActual()
{	
	var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
	var f=new Date();
	document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
}

function cambiarColores()
{
	var dia = new Date();
	if(dia.getDay()==1 || dia.getDay()==5)
	{	
		document.getElementById("subTitulo").style.color="White";
		document.getElementById("subTitulo").style.fontSize="15pt";
		document.getElementById("subTitulo").style.fontFamily="Times";
		document.getElementById("Letras").style.color="White";
		document.getElementById("Letras").style.fontSize="15pt";
		document.getElementById("Letras").style.fontFamily="Times";
		document.getElementById("Fondo").style.background="Green";
	}
	else
	{
		document.getElementById("subTitulo").style.color="Black";
		document.getElementById("subTitulo").style.fontSize="17pt";
		document.getElementById("subTitulo").style.fontFamily="impact";
		document.getElementById("Letras").style.color="Black";
		document.getElementById("Letras").style.fontSize="17pt";
		document.getElementById("Letras").style.fontFamily="impact";
		document.getElementById("Fondo").style.background="Yellow";
	}
}

function validarNombre() 
{
	var nombre=document.getElementById("ID_Nombre").value;
					
	if(nombre.length > 4 && nombre.length <31 && nombre.length != 0) 
	{
		document.getElementById("ID_Nombre").style.color="green";
	} 
	else 
	{
		document.getElementById("ID_Nombre").focus;
		alert("Error, nombre fuera de rango...debe tener por lo menos 5 caracteres");
		document.getElementById("ID_Nombre").style.color="red";
	}
}
function validarRut()
{
	var rut = document.getElementById("ID_Rut").value;
	if(rut.length == 9 )
	{
		document.getElementById("ID_Rut").style.color="green";
	}
	else
	{
		document.getElementById("ID_Rut").focus;
		alert("Error, Rut fuera de rango...debe tener 9 caracteres, ingreselo sin guion(todo junto)");
		document.getElementById("Rut").style.color="Red";
	}
}

function validarEmail(ID_Email) 
{
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(ID_Email))
	{
		document.getElementById("ID_Email").style.color="green";
		alert("La dirección de email " + ID_Email + " es correcta.");
	} 
	else 
	{
		document.getElementById("ID_Email").style.color="red";
		alert("La dirección de email es incorrecta.");
	}
}

function validarFono()
{
	var fono = document.getElementById("ID_Telefono").value;
	if(fono.length==9)
	{
		document.getElementById("ID_Fono").style.color="green";
		if(!/^([0-9])*$/)
		{
			document.getElementById("ID_Fono").style.color="Green";
			alert("Numero Ingresado exitosamente");
		}
		else
		{
			document.getElementById("ID_Fono").focus;
			document.getElementById("ID_Fono").style.color="red";
			alert("Telefono mal ingresado, ingrese 9 digitos");
		}
	}
	else
	{
		document.getElementById("ID_Fono").style.color="red";
		alert("Debe contener 9 digitos");
	}
}













