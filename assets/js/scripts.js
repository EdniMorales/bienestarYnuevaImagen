/*!
    * Start Bootstrap - SB Admin v6.0.0 (https://startbootstrap.com/templates/sb-admin)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    (function($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });
})(jQuery);

/*funcion de calcular edad*/
function calcularEdad()
    {
      var fecha = document.getElementById('dateInicio').value;
      var formatear = convertDateFormat(fecha);
      if(validateFecha(formatear)== true)
      {
        var values=formatear.split("-");
        var dia = values[2];
        var mes = values[1];
        var ano = values[0];

        var fechaHoy = new Date();
        var ahoraAno = fechaHoy.getYear();
        var ahoraMes = fechaHoy.getMonth()+1;
        var ahoraDia = fechaHoy.getDate();

        var edad = (ahoraAno + 1900)-ano;
                
        if(ahoraMes<mes)
        {
          edad--;

        }
        if ((mes == ahoraMes) && (ahoraDia < dia))
            {
                edad--;

            }
            if (edad > 1900)
            {
                edad -= 1900;
            }
    
            // calculamos los meses
            var meses=0;
            if(ahoraMes>mes)
                meses=ahoraMes-mes;
            if(ahoraMes<mes)
                meses=12-(mes-ahoraMes);
            if(ahoraMes==mes && dia>ahoraDia)
                meses=11;
      
            // calculamos los dias
            var dias=0;
            if(ahoraDia>dia)
                dias=ahoraDia-dia;
            if(ahoraDia<dia)
            {
                ultimoDiaMes=new Date(ahoraAno, ahoraMes, 0);
                dias=ultimoDiaMes.getDate()-(dia-ahoraDia);
            }
            var nuevaEdad=document.getElementById("inpuEdad").value = edad;

          // if(nuevaEdad>=6){
          //      document.getElementById("inpuEdad").removeAttribute("style"); 
          //      document.getElementById("inpuEdad").removeAttribute("disabled"); 
          //      document.getElementById("ingresar").removeAttribute("disabled"); 
          //       document.getElementById("message").innerHTML ="";
          // }else{
          //     document.getElementById("inpuEdad").disabled = true;
          //       document.getElementById("inpuEdad").style.backgroundColor = "red";
          //       document.getElementById("ingresar").disabled = true;
          //       document.getElementById("message").innerHTML ="LA EDAD ES MENOR A LA ACEPTADAD DE 6 AÑOS";
          //       return false
          // }

        }else{
            // console.log("hola despues del else");
          // document.getElementById("age").disabled = true;
          // document.getElementById("age").style.backgroundColor = "red";
          // document.getElementById("message").innerHTML="EL FORMATO ES DD/MM/YYYY";
    }
    }

    function convertDateFormat(string) {
      var info = string.split('-');
      return info[2] + '-' + info[1] + '-' + info[0];
    }

    function isValidDate(day,month,year)
    {
      var dteDate;
      month=month-1;
      dteDate= new Date(year,month,day);

      return ((day == dteDate.getDate())&&(month==dteDate.getMonth())&&(year==dteDate.getFullYear()));
      
    }
    function validateFecha(fecha)
    {
      var patron = new RegExp("^(19|20)+([0-9]{2})([-])([0-9]{1,2})([-])([0-9]{1,2})$");
      if(fecha.search(patron)==0)
      {
        var values=fecha.split("-");
        if(isValidDate(values[2],values[1],values[0]))
        {
         return true;
        }
      }
      return false;
    }

/*validacion*/
function expRegular(texto,contenido){

  var letras_latinas;
  var ercorreo;
  var phonearray;   
  var mesaje;
  var pass;
  var varif;  

  switch (texto) {
    case "nombre":
     letras_latinas = /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ/-_-\s]+$/;
     varif = letras_latinas;
    break;
    
    case "email":
     ercorreo=/^[^@\s]+@[^@\.\s]+(\.[^@\.\s]+)+$/;
     varif = ercorreo;
    break;
    
    case "phone":
     phonearray = /^[0-9]+$/;
     varif =   phonearray;
    break; 
    
    case "messagge":
    case "dir":
     mesaje = /^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_;,.()¿$?\s]+$/;
     varif= mesaje; 
    break;
    
    case "pass":
    pass = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;
    varif =   pass;
    /*La contraseña debe tener al entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula.
NO puede tener otros símbolos.
Ejemplo:
w3Unpocodet0d0 */
    break; 

  }
  if (!(varif.test(contenido))) {
       return 0;
    }else{
       return texto;
    }

}

function getAbsolutePath() {
    var loc = window.location;
    //var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
    var pathName = loc.pathname.substring(0, 23);
    return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));    
}