// let tblClientes;

// document.addEventListener("DOMContentLoaded", function () {

//     const language = {
//         "decimal": "",
//         "emptyTable": "No hay información",
//         "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
//         "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
//         "infoFiltered": "(Filtrado de _MAX_ total entradas)",
//         "infoPostFix": "",
//         "thousands": ",",
//         "lengthMenu": "Mostrar _MENU_ Entradas",
//         "loadingRecords": "Cargando...",
//         "processing": "Procesando...",
//         "search": "Buscar:",
//         "zeroRecords": "Sin resultados encontrados",
//         "paginate": {
//             "first": "Primero",
//             "last": "Ultimo",
//             "next": "Siguiente",
//             "previous": "Anterior"
//         }

//     }

//     const buttons = [{
//         //Botón para Excel
//         extend: 'excel',
//         footer: true,
//         title: 'Archivo',
//         filename: 'Export_File',

//         //Aquí es donde generas el botón personalizado
//         text: '<button class="btn btn-success"><i class="fa fa-file-excel-o"></i></button>'
//     },
//     //Botón para PDF
//     {
//         extend: 'pdf',
//         footer: true,
//         title: 'Archivo PDF',
//         filename: 'reporte',
//         text: '<button class="btn btn-danger"><i class="fa fa-file-pdf-o"></i></button>'
//     },
//     //Botón para print
//     {
//         extend: 'print',
//         footer: true,
//         title: 'Reportes',
//         filename: 'Export_File_print',
//         text: '<button class="btn btn-info"><i class="fa fa-print"></i></button>'
//     }
//     ]
//     tblClientes = $('#tblClientes').DataTable({
//         ajax: {
            
//             url: base_url + "Clientes/listar",
//             dataSrc: ''
//         },
//         columns: [{ 'data': 'id' },
//         { 'data': 'codigo' },
//         { 'data': 'cliente' },
//         { 'data': 'contacto' },
//         { 'data': 'telefono' },
//         { 'data': 'email' },
//         { 'data': 'tiempo_contrato' }
      
//         ]
//         // language,
//         // dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>" +
//         //     "<'row'<'col-sm-12'tr>>" +
//         //     "<'row'<'col-sm-5'i><'col-sm-7'p>>",
//         // // buttons
//     })

// })

// function frmClientes() {
//     document.getElementById("title").textContent = "Nuevo Cliente";
//     document.getElementById("btnAccion").textContent = "Registrar";
//     document.getElementById("frmClientes").reset();
//     document.getElementById("id").value = "";
//     $("#nuevoCliente").modal("show");
// }


// function registrarCliente(e) {
//     e.preventDefault();
//     const codigo = document.getElementById("codigo_cliente");
//     const cliente = document.getElementById("cliente");
//     const contacto = document.getElementById("contacto");
//     const telefono = document.getElementById("telefono");
//     const email = document.getElementById("email");
//     const tiempo_contrato = document.getElementById("tiempo_contrato");
//     if (codigo.value == "" || cliente.value == "" || contacto.value == ""
//         || telefono.value == "" || email.value == "" || tiempo_contrato.value == "") {
//         alertas('Todo los campos son requeridos', 'warning');
//     } else {
//         const url = base_url + "Clientes/registrar";
//         const frm = document.getElementById("frmClientes");
//         const http = new XMLHttpRequest();
//         http.open("POST", url, true);
//         http.send(new FormData(frm));
//         http.onreadystatechange = function () {
//             if (this.readyState == 4 && this.status == 200) {
//                 const res = JSON.parse(this.responseText);
//                 $("#nuevoCliente").modal("hide");
//                 frm.reset();
//                 tblEst.ajax.reload();
//                 alertas(res.msg, res.icono);
//             }
//         }
//     }
// }