<?php
class Area extends Controller
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
        $this->views->getView($this, "index");

    }
    public function listar()
    {
        //$var =  "estamos en listar ";

        //return $var;
/*
        $data = (object) [
            'id' => '1',
            'area' => 'vendedor',
            'descripcion' => 'hace ventas',
            'accion' => 'Borrar'

          ];

          */
          //$data = $this->model->getUsuarios();
          $data = $this->model->ListarAreas();
/*
          $data[0]['id']='1';
          $data[0]['area']="ventas";
          $data[0]['descripcion']=" para la ventas";
          $data[0]['accion'] = "borrar";

          $data[1]['id'] = '2';
          $data[1]['area']="tecnicos";
          $data[1]['descripcion']= "personal en campo";
          $data[1]['accion'] ="ACTUALIZAR";
        */
          //return json_encode($object);
          echo json_encode($data, JSON_UNESCAPED_UNICODE);
          die();

    }

}