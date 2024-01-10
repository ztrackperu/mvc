<?php

class Clientes extends Controller
{

    public function __construct()
    {
        session_start();
        if (empty($_SESSION["activo"])) {
            header("location: " . base_url);
        }
        parent::__construct();
    }

    public function index()
    {
        $this->views->getView($this, "index"); 
        
        // return 'hola';
    }

    public function listar(){

    //     $data = $this->model->getClientes();

       
    //      for ($i=0; $i < count($data); $i++) {
    //          if ($data[$i]['estado'] == 1) {
                
    //                  $data[$i]['estado'] = '<span class="badge badge-success">Activo</span>';
    //                  $data[$i]['acciones'] = '<div>
    //                  <button class="btn btn-primary" type="button" onclick="btnEditarCliente(' . $data[$i]['id'] . ');"><i class="fa fa-pencil-square-o"></i></button>
    //                  <button class="btn btn-danger" type="button" onclick="btnEliminarCliente(' . $data[$i]['id'] . ');"><i class="fa fa-trash-o"></i></button>
    //                  <div/>';
    //      }
        
    // }

    // echo json_encode($data,JSON_UNESCAPED_UNICODE);
    // die();
    
    $data[0]['id']='1';
    $data[0]['area']="ventas";
    $data[0]['descripcion']=" para la ventas";
    $data[0]['accion'] = "borrar";

    $data[1]['id'] = '2';
    $data[1]['area']="tecnicos";
    $data[1]['descripcion']= "personal en campo";
    $data[1]['accion'] ="ACTUALIZAR";


    echo json_encode($data, JSON_UNESCAPED_UNICODE);
    die();

}


    public function registar()
    {

        $codigo_cliente = strClean($_POST["codigo_cliente"]);
        $cliente = strClean($_POST["cliente"]);
        $contacto = strClean($_POST["contacto"]);
        $telefono = strClean($_POST["telefono"]);
        $email = strClean($_POST["email"]);
        $tiempo_contrato = strClean($_POST["tiempo_contrato"]);


        if (empty($codigo_cliente) || empty($cliente) || empty($contacto) || empty($telefono) || empty($email) || empty($tiempo_contrato)) {

            $msg = array('msg' => 'Todo los campos son requeridos', 'icono' => 'warning');
        } else {

            if ($id = "") {

                $data = $this->model->registrarCliente($codigo_cliente, $cliente, $contacto, $telefono, $email, $tiempo_contrato);

                if ($data == "ok") {

                    $msg = array('msg' => 'Cliente registrado', 'icono' => 'success');
                } else if ($data == "existe") {

                    $msg = array('msg' => 'El Cliente ya existe', 'icono' => 'warning');
                } else {

                    $msg = array('msg' => 'Error al Registrar', 'icono' => 'error');
                }
            }else{

                $data =$this->model->modificarCliente($codigo_cliente, $cliente, $contacto, $telefono, $email, $tiempo_contrato,$id);

                if($data == "modificado"){

                    $msg = array('msg' => 'Cliente modificado', 'icono' => 'success');

                }else{

                    $msg = array('msg' => 'Error al modificar', 'icono' => 'error');

                }

            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
}
