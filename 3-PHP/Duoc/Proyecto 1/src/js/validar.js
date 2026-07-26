//Los campos requeridos son: rut, nombre, fono, usuario y contraseña, estos dos últimos con un rango mínimo de 6 y máximo 10 caracteres alfanuméricos.
//i.Rut, validar largo 9 caracteres y debe tener datos.
function validarRut()
{
    var rut = document.getElementById("rut").value;
    //isNan()//numero valida letras
    if(rut.length > 0 )
    {
        if(rut.length == 9)
        {
            document.getElementById("rut").style.color="green";
        
        }
        else
        {
            alert("error, Rut fuera de rango...");
            document.getElementById("rut").focus;
            document.getElementById("rut").style.color="red";   
        }
    }
    else
    {
        alert("error, Ingrese un rut...");
        document.getElementById("rut").focus;
        document.getElementById("rut").style.color="red";
    }
}

//ii.	Nombre, validar largo entre 5 y 30 caracteres, debe tener datos.
function validarNombre()
{
    var nombre=document.getElementById("nombre").value;
    //isNan()//numero valida letras
    if(nombre.length>0 )
    {
        if(nombre.length<5 || nombre.length>30)
        {
        
            alert("error, Nombre fuera de rango...");
            document.getElementById("nombre").focus;
            document.getElementById("nombre").style.color="red";
            

        }
        else
        {
            document.getElementById("nombre").style.color="green";
        }
    }
    else
    {
        alert("error, Ingrese un nombre...");
        document.getElementById("nombre").focus;
        document.getElementById("nombre").style.color="red";
    }
}

//iii.	Email, validar que entre sus caracteres se encuentre un @ y al menos un punto.
function validarEmail()
{
    var email=document.getElementById("email").value;
    //isNan()//numero valida letras
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(email.length>0)
    {
        if(expr.test(email))
        {
            document.getElementById("email").style.color="green";
        } 
        else
        {
            alert("error, email sin caracteres...");
            document.getElementById("email").focus;
            document.getElementById("email").style.color="red";
        }
    }
    else
    {
        alert("error, Ingrese un email...");
        document.getElementById("email").focus;
        document.getElementById("email").style.color="red";
    }
}

//iv.	Fono, validar que sean solo números con un largo igual a 9.
function validarFono()
{
    var fono=document.getElementById("fono").value;
    //isNan()//numero valida letras
    if(fono.length>0)
    {
        if(fono.length==9)
        {
            document.getElementById("fono").style.color="green";
        }
        else
        {
            alert("error, fono fuera de rango...");
            document.getElementById("fono").focus;
            document.getElementById("fono").style.color="red";
        }
    }
    else
    {
        alert("error, Ingrese un fono...");
        document.getElementById("fono").focus;
        document.getElementById("fono").style.color="red";
    }
}

//v.	Texto, validar que la cantidad de caracteres sea mayor que 1 y menor que 120.
function validarMensaje()
{
    var texto=document.getElementById("mensaje").value;
    //isNan()//numero valida letras
    if(texto.length>0)
    {
        if(texto.length>1 && texto.length<120)
        {
            document.getElementById("mensaje").style.color="green";
        }
        else
        {
            alert("error, texto fuera de rango...");
            document.getElementById("mensaje").focus;
            document.getElementById("mensaje").style.color="red";
        }
    }
    else
    {
        alert("error, Ingrese un texto...");
        document.getElementById("mensaje").focus;
        document.getElementById("mensaje").style.color="red";
    }
}

