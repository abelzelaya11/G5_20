<?php
    class Pedidos extends Conectar{

        Public function get_pedidos(){
            $conectar= parent::conexion();
            parent::set_names_();
            $sql="SELECT * FROM ma_pedidos";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);            
        }
        
        public function get_pedidos($ID){
            $conectar= parent::conexion();
            $sql="SELECT * FROM ma_pedidos where ID= ?";
            $sql=$conectar-> prepare($sql);
            $sql->bindValue(1, $ID);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function insertar_pedidos($ID,$ID_SOCIO,$FECHA_PEDIDO,$DETALLE,$SUB_TOTAL,$TOTAL_ISV,$TOTAL,$FECHA_ENTEGA,$ESTADO)
        {   $conectar= parent::Conexion();
            parent :: set_names();
            $sql="INSERT INTO ma_pedidos(ID, ID_SOCIO, FECHA_PEDIDO, DETALLE, SUB_TOTAL, TOTAL_ISV, TOTAL, FECHA_ENTREGA, ESTADO)
            VALUES (?,?,?,?,?,?,?,?,?,?);";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $ID);
            $sql->bindValue(2, $ID_SOCIO);
            $sql->bindValue(3, $FECHA_PEDIDO);
            $sql->bindValue(4, $DETALLE);
            $sql->bindValue(5, $SUB_TOTAL);
            $sql->bindValue(6, $TOTAL_ISV);
            $sql->bindValue(7, $TOTAL);
            $sql->bindValue(8, $FECHA_ENTREGA);
            $sql->bindValue(9, $ESTADO);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

        }

        public function eliminar_pedidos($ID){
            $conectar= parent::Conexion();
            parent::set_names();
            $sql="DELETE FROM ma_pedidos WHERE id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $ID);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function actualizar_pedidos($ID, $ID_SOCIO, $FECHA_PEDIDO, $DETALLE, $SUB_TOTAL, $TOTAL_ISV, $TOTAL, $FECHA_ENTREGA, $ESTADO){
            $conectar= parent::Conexion();
            parent::set_names();
            $sql="UPDATE ma_pedidos SET ID_SOCIO=?, FECHA_PEDIDO=?, DETALLE=?, SUB_TOTAL=?, TOTAL_ISV=?, TOTAL=?, FECHA_ENTREGA=?, ESTADO=? WHERE ID = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $ID_SOCIO);
            $sql->bindValue(2, $FECHA_PEDIDO);
            $sql->bindValue(3, $DETALLE);
            $sql->bindValue(4, $SUB_TOTAL);
            $sql->bindValue(5, $TOTAL_ISV);
            $sql->bindValue(6, $TOTAL);
            $sql->bindValue(7, $FECHA_ENTREGA);
            $sql->bindValue(8, $ESTADO);
            $sql->bindValue(9, $ID);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>