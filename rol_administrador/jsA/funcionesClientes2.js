function agregar_datos() {
    var datos = $("#frminsertarclientes").serialize();
    $.ajax({
        method: "POST",
        url: "daoA/insertarT.php",
        data: datos,
        success: function(e) {
            if (e == 1) {
                alert("Registros Almacenados con exito");
            } else {
                alert("Los registros no fueron Almacenados verificar datos");
            }
        }
    });

    return false;
}

function modificar_datos() {
    var datos = $("#frminsertarclientes").serialize();
    alert(datos);
    $.ajax({
        method: "POST",
        url: "daoA/actualizarT.php",
        data: datos,
        success: function(e) {
            if (e == 1) {
                alert("Registros Actualizados con exito");
            } else {
                alert("Los registros no fueron Actualizados verificar datos");
            }
        }
    });
    return false;
}

function eliminar_datos() {
    var datos = $("#frminsertarclientes").serialize();
    alert(datos);
    $.ajax({
        method: "POST",
        url: "daoA/eliminarT.php",
        data: datos,
        success: function(e) {
            if (e == 1) {
                alert("Registros Eliminados con exito");
            } else {
                alert("Los registros no fueron Eliminados verificar datos");
            }
        }
    });
    return false;
}