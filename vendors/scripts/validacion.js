document.addEventListener('DOMContentLoaded', function() {
    var formMarca = document.querySelector("#formMarca");
    formMarca.onsubmit = function(e) {
        e.preventDefault();
        var strImarca = document.querySelector('#marca').value;
        if (strImarca == '') {
            swal("Atención", "Todos los campos son obligatorios.", "error");
            return false;
        }
    }

    var fromCategoria = document.querySelector("#fromCategoria");
    fromCategoria.onsubmit = function(e) {
        e.preventDefault();
        var strIcategoria = document.querySelector('#categoria').value;
        if (strIcategoria == '') {
            swal("Atención", "Todos los campos son obligatorios.", "error");
            return false;
        }
    }

    var formGrupo = document.querySelector("#formGrupo");
    formGrupo.onsubmit = function(e) {
        e.preventDefault();
        var strgrupo = document.querySelector('#grupo').value;
        if (strgrupo == '') {
            swal("Atención", "Todos los campos son obligatorios.", "error");
            return false;
        }
    }

    var formMedida = document.querySelector("#formMedida");
    formMedida.onsubmit = function(e) {
        e.preventDefault();
        var strunidad = document.querySelector('#unidad').value;
        if (strunidad == '') {
            swal("Atención", "Todos los campos son obligatorios.", "error");
            return false;
        }
        if (strunidad.length > 4) {
            swal("Atención", "el texto tiene que ser menor a 4.", "error");
            return false;
        }

    }

    var formGrupo = document.querySelector("#formImpuestos");
    formGrupo.onsubmit = function(e) {
        e.preventDefault();
        var strnombreImpuesto = document.querySelector('#nombreImpuesto').value;
        var intporcentajeImpuesto = document.querySelector('#porcentajeImpuesto').value;
        if (strnombreImpuesto == "" || intporcentajeImpuesto == "") {
            swal("Atención", "Todos los campos son obligatorios.", "error");
            return false;
        }
        if (strnombreImpuesto.length > 4) {
            swal("Atención", "El texto tiene que ser menor a 4.", "error");
            return false;
        }
    }

});