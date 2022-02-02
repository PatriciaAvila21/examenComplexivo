<?php
require_once '../controller/medicocontroller.php';
$objdoc=new medicocontroller();
$op="mostrar";
if(isset($_REQUEST['op']))
    $op=$_REQUEST['op'];
    if($op=="mostrar")
    $objdoc->mostrar();
    elseif ($op=="nuevo")
        $objdoc->nuevo();
    elseif ($op=="guardar")
        $objdoc->guardar();
    elseif ($op=="editar")
        $objdoc->editar();
    elseif($op=="update")
        $objdoc->update();
        elseif($op=="insertar")
            $objdoc->insertar();
        elseif($op=="recibir")
            $objdoc->recibir();
            elseif($op=="eliminar")
                $objdoc->eliminar();
?>
