function agregar_datos() {
    var datos = $("#frmrecervacion").serialize();
    //alert(datos);
    $.ajax({
        method: "POST",
        url: "daoem/insertar.php",
        data: datos,
        success: function(e) {
            if (e == 1) {
                alert("registro guardado con exito");
            } else {
                alert("Error al almacenar registro");
            }
        }
    });

    return false;
}
function eliminar_datos() {
    //obteniendo todos los datos del formulario
    var datos = $("#frmrecervacion").serialize();
    alert(datos);
    $.ajax({
        method: "POST",
        url: "daoem/eliminar.php",
        data: datos,
        success: function(e) {
            if (e == 1) {
                alert("registro eliminado");
            } else {
                alert("no se puede eliminar, verifique datos");
            }
        }
    });
    return false;
}
function modificar_datos() {
    //obteniendo todos los datos del formulario
    var datos = $("#frmrecervacion").serialize();
    alert(datos);
    $.ajax({
        method: "POST",
        url: "daoem/actualizar.php",
        data: datos,
        success: function(e) {
            if (e == 1) {
                alert("registro modificado");
            } else {
                alert("no se puede modificar, verifique datos");
            }
        }
    });
    return false;
}