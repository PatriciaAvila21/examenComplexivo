<?php
require_once '../controller/catalogoMedicinacontroller.php';
$objcat=new catalogoMedicinacontroller();
$op="mostrar";
if(isset($_REQUEST['op']))
    $op=$_REQUEST['op'];
    if($op=="mostrar")
    $objcat->mostrar();
    elseif ($op=="nuevo")
        $objcat->nuevo();
    elseif ($op=="guardar")
        $objcat->guardar();
    elseif ($op=="editar")
        $objcat->editar();
    elseif($op=="update")
        $objcat->update();
        elseif($op=="insertar")
            $objcat->insertar();
        elseif($op=="recibir")
            $objcat->recibir();
            elseif($op=="eliminar")
                $objcat->eliminar();
?>
