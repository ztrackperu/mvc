
document.addEventListener("DOMContentLoaded", function () {

    $('#tblClientes').DataTable({
                 ajax: {
                    
                     url: ruta + "Clientes/listar",
                     dataSrc: ''
                 },
                 columns: [{ 'data': 'id' },
                 { 'data': 'area' },
                 { 'data': 'descripcion' },
                 { 'data': 'accion' }
                //  { 'data': 'telefono' },
                //  { 'data': 'email' },
                //  { 'data': 'tiempo_contrato' },
                //  { 'data': 'estado' },
                //  { 'data': 'acciones' }
              
                 ]
                })

})
