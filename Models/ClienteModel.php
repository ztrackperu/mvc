<?php

class ClienteModel extends Query
{

    protected $id, $codigo_cliente, $cliente, $contacto, $telefono, $email, $tiempo_contrato;

    public function __construct()
    {
        parent::__construct();
    }

    

public function getClientes(){
    $sql="SELECT * FROM cliente";
    $data =$this->selectAll($sql);
    return $data;
}

    public function registrarCliente($codigo_cliente, $cliente, $contacto, $telefono, $email, $tiempo_contrato)
    {
        $this->codigo_cliente = $codigo_cliente;
        $this->cliente = $cliente;
        $this->contacto = $contacto;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->tiempo_contrato = $tiempo_contrato;

        $verificar = "SELECT * FROM cliente WHERE codigo_cliente = '$this->codigo_cliente'";
        $existe  = $this->select($verificar);

        if (empty($existe)) {

            #inserccion 

            $sql = "INSERT INTO cliente(codigo_cliente,cliente,contacto,telefono,email,tiempo_contrato) VALUES (?,?,?,?,?,?)";
            $datos = array($this->codigo_cliente, $this->cliente, $this->contacto, $this->telefono, $this->email, $this->tiempo_contrato);
            $data = $this->save($sql, $datos);
            if ($data == 1) {

                $res = "ok";
            } else {
                $res = "error";
            }
        } else {
            $res = "existe";
        }

        return $res;
    }


    public function modificarCliente($id, $codigo_cliente, $cliente, $contacto, $telefono, $email, $tiempo_contrato)
    {

        $this->codigo_cliente = $codigo_cliente;
        $this->cliente = $cliente;
        $this->contacto = $contacto;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->tiempo_contrato = $tiempo_contrato;
        $this->id = $id;

        $sql = "UPDATE cliente SET codigo_cliente =?, cliente=?,contacto =?,telefono=?,email=?,=tiempo_contrato=? WHERE id =?";
        $datos = array($this->codigo_cliente, $this->cliente, $this->contacto, $this->telefono, $this->email, -$this->tiempo_contrato, $this->id);
        $data = $this->save($sql, $datos);
        if ($data == 1) {
            $res = "modificado";
        } else {
            $res = "error";
        }
        return $res;
    }
}
