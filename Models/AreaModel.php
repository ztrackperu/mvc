<?php
class AreaModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }
    public function ListarAreas()
    {
        $sql = "SELECT * FROM area where estado=1";
        $res = $this->selectAll($sql);
        return $res;
    }

}