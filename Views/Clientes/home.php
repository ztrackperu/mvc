<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Clientes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url; ?>Usuarios">Inicio</a></li>
                        <li class="breadcrumb-item active">Administrador de Clientes</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">

                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-lg">Agregar Cliente</button>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                    <table id="tblClientes" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            

                        </tbody>
                    </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!--============================ 
    MODAL AGREGAR CLIENTE
      ============================ -->

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-header" style="background-color:black;">
                    <h4 class="modal-title" style="color: white;">Registrar Cliente</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Codigo</label>
                                <input type="text" class="form-control" id="codigo_cliente" name="codigo_cliente" placeholder=" Codigo">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Cliente</label>
                                <input type="text" class="form-control" id="cliente" name="cliente" placeholder=" Cliente">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Contacto</label>
                                <input type="text" class="form-control" id="contacto" name="contacto" placeholder=" Contacto">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Telefono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder=" Telefono">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder=" Correo">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tiempo Contratado</label>
                                <input type="text" class="form-control" id="tiempo_contrato" name="tiempo_contrato" placeholder="Ingresar Tiempo">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-dark" onclick="registrarCliente" id="guardar">Guardar Cliente</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>