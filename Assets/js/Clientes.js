
// console.log("clientes");

// document.addEventListener("DOMContentLoaded", function () {

//     $('#tblClientes').DataTable({
//                  ajax: {

//                      url: ruta + "Clientes/listar",
//                      dataSrc: ''
//                  },
//                  columns: [{ 'data': 'id' },
//                  { 'data': 'codigo_cliente' },
//                  { 'data': 'cliente' },
//                  { 'data': 'contacto' },
//                  { 'data': 'telefono' },
//                  { 'data': 'email' },
//                  { 'data': 'tiempo_contrato' },
//                  { 'data': 'estado' },
//                  { 'data': 'acciones' }

//                  ]
//                 })

// })

document.addEventListener('DOMContentLoaded', function () {
    $('#tblClientes').DataTable({
        ajax: {
            url: ruta + 'Clientes/listar',
            dataSrc: ''
        },
        columns: [{ 'data': 'id' },
        { 'data': 'codigo_cliente' },
        { 'data': 'cliente' },
        { 'data': 'contacto' },
        { 'data': 'telefono' },
        { 'data': 'email' },
        { 'data': 'tiempo_contrato' },
        { 'data': 'estado' },
        { 'data': 'acciones' }

        ],
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json'
        },
        "order": [[0, 'desc']]
    });

})