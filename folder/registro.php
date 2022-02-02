<?php
require_once '../controller/registroController.php';
$objregis=new registrocontroller();
$op="mostrar";
if(isset($_REQUEST['op']))
    $op=$_REQUEST['op'];
    if($op=="mostrar")
    $objregis->mostrar();
    elseif ($op=="nuevo")
        $objregis->nuevo();
    elseif ($op=="guardar")
        $objregis->guardar();
    elseif ($op=="editar")
        $objregis->editar();
    elseif($op=="update")
        $objregis->update();
        elseif($op=="insertar")
            $objregis->insertar();
        elseif($op=="recibir")
            $objregis->recibir();
            elseif($op=="eliminar")
                $objregis->eliminar();
?>