<?php
class Configuracion extends Controller
{
    public function __construct()
    {
        session_start();
        if (empty($_SESSION['activo'])) {
            header("location: " . base_url);
        }
        parent::__construct();
    }
    public function index()
    {

    }
    public function listar()
    {
        $data = $this->model->listaCliente();
        for ($i = 0; $i < count($data); $i++) {       
                $data[$i]['estado'] = '<span class="badge badge-success">Activo</span>';
                $data[$i]['acciones'] = '<div>
                <button class="btn btn-primary" type="button" onclick="btnEditarEdi(' . $data[$i]['id'] . ');"><i class="fa fa-pencil-square-o"></i></button>
                <button class="btn btn-danger" type="button" onclick="btnEliminarEdi(' . $data[$i]['id'] . ');"><i class="fa fa-trash-o"></i></button>
                <div/>';

        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }




}

?>