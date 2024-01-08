<?php
class ClienteModel extends Query{
    // campos a manejar
    protected $id, $codigo_cliente, $clinte, $contacto, $telefono, $email, $tiempo_contrato;
    public function __construct()
    {
        parent::__construct();
    }
    public function listaCliente()
    {
        $sql = "SELECT * FROM clientes where estado=1";
        $res = $this->selectAll($sql);
        return $res;
    }


}