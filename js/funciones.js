btnguardar = document.getElementById('guardarnuevo');

btnguardar.addEventListener('click',function(){

    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    email = document.getElementById("email").value;
    telefono = document.getElementById("telefono").value;

    // alert(nombre + " " + apellido + " " + email + " " + telefono);
       

    cadena = "nombre=" + nombre + 
            "&apellido=" + apellido + 
            "&email=" + email + 
            "&telefono=" + telefono;
            // console.log(cadena);
    $.ajax({
        type:"POST",
        url:"php/agregarDatos.php",
        data:cadena,
        success:function(r) {
            if (r==1) {
                $('#tabla').load('componentes/tabla.php');
                alertify.success("Agregado con exito");
                // vaciamos los input
                nombre = document.getElementById("nombre").value="";
                apellido = document.getElementById("apellido").value="";
                email = document.getElementById("email").value="";
                telefono = document.getElementById("telefono").value="";
            }else{
                alertify.error("fallo el servidor");
            }
        }

    });
});


// llevalos los datos al modal de editar
function traerDatos(datos) {
data = datos.split('||');
// console.log(data);
    document.getElementById('idpersona').value=data[0];
    document.getElementById('nombreu').value=data[1];
    document.getElementById('apellidou').value=data[2];
    document.getElementById('emailu').value=data[3];
    document.getElementById('telefonou').value=data[4];
}

btnActualiza = document.getElementById('actualizadatos');

btnActualiza.addEventListener('click',function() {
    // console.log("hiciste click en actualiza");

                id = $("#idpersona").val();
                nombre = $("#nombreu").val();
				apellido = $("#apellidou").val();
				email = $("#emailu").val();
				telefono = $("#telefonou").val();

    cadena =    "id=" + id + 
                "&nombre=" + nombre + 
                "&apellido=" + apellido + 
                "&email=" + email + 
                "&telefono=" + telefono;
// console.log(cadena);
    $.ajax({
        type:"POST",
        url:"php/updateDatos.php",
        data:cadena,
        success:function(r) {
            if (r==1) {
                $('#tabla').load('componentes/tabla.php');
                alertify.success("Actualizado con exito");
            }else{
                alertify.error("fallo el servidor");
            }
        }

    });


});


// eliminar datos
// btneliminar = document.getElementById('remover');

// btneliminar.addEventListener('click',function() {
//    alert("sedioclick");
// });


function borrarSino(id) {
    alertify.confirm('Eliminar Dato', '¿Realmente desea eliminar este registro?', function(){ eliminarDato(id); }
                , function(){ alertify.error('Registro no eliminado')});
}

function eliminarDato(id) {
    cadena = "id=" + id;

    $.ajax({
        type:"POST",
        url:"php/deleteDatos.php",
        data:cadena,
        success:function(r) {
            if (r==1) {
                $('#tabla').load('componentes/tabla.php');
                alertify.success("Eliminado con exito");
            }else{
                alertify.error("fallo el servidor");
            }
        }

    });
}