/*edad = prompt("Escriba su edad");
    while(edad<18){
    alert("Usted es menor de edad y no puede entrar");
    edad = prompt("Escriba de nuevo su edad");
}
location.href="http://www.google.com";*/

/* Json -> notación objetual de Javascript*/

/*var persona = {
    nombre: "Andrés",
    apellido: "Bedoya",
    lugar__nacimiento: "Medellin",
    intereses: ["programacion", "deporte"]
};

alert("El nombre de la persona es: " + persona.nombre);

var managerScreen = managerScreen || {};
managerScreen = {
    cambiarColorFondo : function(color){
        document.body.style.background = color;
        $('body').css('background-color',color)
    },
    
    saludar : function(){
        alert("Bienvenido");
    },
    
    ocultarParrafo : function(){
        /*var x = document.getElementsByTagName(tag);
        var i;
        for(i = 0; i < x.length ; i++){
            x[i].style.display ='none';            
        }
        $('p').hide();
    },
    
    ocultar : function(){
        /*var x = document.getElementsByTagName(tag);
        var i;
        for(i = 0; i < x.length ; i++){
            x[i].style.display ='none';            
        }
        $('p, div').toggle();
    
    },
    
    desvanecer : function(){
        $('div, p').fadeToggle(5000);
    },
    
    alertify : function(){
        //alertify .alert("Message");
        alertify.log("Notification", "Success", 10000);
        alertify.log("Error!!!!", "Error", 5000);
        //alertify.log("Notification", "Success", 10000);
    },
   
};


var ms = managerScreen;*/

var fb = {
    comentar: function(id){
        var comentario = $("#comentario-"+id);
        if(comentario.val()!=""){
            $.ajax({
                url: 'publicacion/comentar',
                type: 'POST',
                async: true,
                data: {
                    usuario : 1,
                    comentario : comentario.val()
                },
                success: function(data){
                    alert('Se ejecuto correctamente');
                }
            });
        }else{
            alert('Este campo es obligatorio');
        }
    }
};