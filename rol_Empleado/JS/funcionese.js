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