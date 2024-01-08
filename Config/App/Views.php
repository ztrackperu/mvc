<?php
class Views{

    public function getView($controlador, $vista, $data="")
    {
        $controlador = get_class($controlador);
        // se esta yendo al login
        if ($controlador == "Home") {
            $vista = "Views/".$vista.".php";
        }else{
            // estructura para las vistas 
            $vista = "Views/".$controlador."/".$vista.".php";
        }
        require $vista;
    }
}


?>