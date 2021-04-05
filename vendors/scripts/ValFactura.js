document.addEventListener('DOMContentLoaded', function() {
    var formFactura = document.querySelector("#formFactura");
    formFactura.onsubmit = function(e) {
        e.preventDefault();
        var descuento = document.querySelector('#inlineFormCustomSelect').value;
        /* var cantidad = document.querySelector('#cantidad').value; */
        var producto = document.querySelector('#producto').value;
        var numCai = document.querySelector('#numCai').value;
        var numFactura = document.querySelector('#numFactura').value;
        var cliente = document.querySelector('#cliente').value;
        var fecha = document.querySelector('#fecha').value;
        if (descuento == '' || producto == '' || numCai == '' || numFactura == '' || cliente == '' || fecha == '') {
            swal("Atención", "Todos los campos son obligatorios.", "error");
            return false;
        }
    }
});