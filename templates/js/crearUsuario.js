document.ready(crearUsuario());
function crearUsuario(){
    $("#formularioRegistro").submit(function(event){
        event.preventDefault();
        alert("si");
        sendRegistro();
        $("#mensajeRegistro").text("Cargando...");
    })
}

function sendRegistro(){
    var nombreUsuario = $("[name = 'nombreUsuarioRegistro']").val();
    var nombres = $("[name = 'nombres']").val();
    var apellidos = $("[name = 'apellidos']").val();
    var correoElectronico = $("name = 'correoElectronico'").val();
    var contrasena1 = $("[name = 'contraseña1']").val();
    var contrasena2 = $("[name = 'contraseña2']").val();
    if(contrasena1 == contrasena2){
        var direccion = $("[name]='direccion'");
        var telefono = $("[name] = 'telefono'");
        var celular = $("[name] = 'celular'");
        $.ajax({
            data:"nombreUsuario="+nombreUsuario+" &nombres="+nombres+" &apellidos="+apellidos+" &correoElectronico="+correoElectronico+" &contraseña="+contrasena1+" &direccion= "+direccion+" &telefono="+telefono+" &celular="+celular,
            type: "POST",
            datatype: "json",
            url: "",
            success: function(data){
                confirmacion(data);
            }
        });
    }
    else{
        $("#mensajeRegistro").text("Las contraseñas no coinciden");
    }
}

function confirmacion(data){
    $("#mensajeRegistro").text(data);
}

