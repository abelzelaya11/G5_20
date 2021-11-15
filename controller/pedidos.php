<?php
    header ('Content-Type: application/json');

    require_once("../config/conexion.php");
    require_once("../models/Pedidos.php");
    $pedidos = new Pedidos();

    $body = json_decode(file_get_contents("pho://input"), true);

    switch($_GET["op"]){

        case "GetPedidos":
            $datos-$pedidos->get_pedidos();
            echo json_encode($datos);
        break;

        case "GetUno";
            $datos_$pedidos->get_pedidos($body["ID"]);
            echo json_encode($datos);
        break;

        case "insertPedidos";
            $datos-$proveedores->insert_pedidos($body["ID"], $body["ID_SOCIO"], $body["FECHA_PEDIDO"], $body["DETALLE"], $body["SUB_TOTAL"], $body["TOTAL_ISV"], $body["TOTAL"], $body["FECHA_ENTREGA"], $body["ESTADO"]);
            echo json_encode("Pedido Agregado");
    }
?>