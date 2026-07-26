



//v.	Texto, validar que la cantidad de caracteres sea mayor que 1 y menor que 120.
function validarMensaje()
{
    var texto=document.getElementById("id_texto").value;
    //isNan()//numero valida letras
    if(texto.length>0)
    {
        if(texto.length>1 && texto.length<120)
        {
            document.getElementById("id_texto").style.color="green";
        }
        else
        {
            alert("error, texto fuera de rango...");
            document.getElementById("id_texto").focus;
            document.getElementById("id_texto").style.color="red";
        }
    }
    else
    {
        alert("error, Ingrese un texto...");
        document.getElementById("id_texto").focus;
        document.getElementById("id_texto").style.color="red";
    }
}