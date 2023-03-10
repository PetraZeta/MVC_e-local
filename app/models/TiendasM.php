<?php

class TiendasM extends Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function pintarTodos(){
        $sql="SELECT * FROM tienda";
        $this->consultar($sql);
        return $this->resultado();
    }
    public function traerUno($id)
    {
        $sql = "SELECT * FROM tienda WHERE id=$id"; //traer por id
        $this->consultar($sql);
        $this->enlazar(":id", $id);
        return $this->fila();
    }
    public function traerProductos($id)
    {
        $sql = "SELECT * FROM tienda INNER JOIN producto ON tienda.id=producto.id_tienda WHERE tienda.id=$id"; //traer por id
        $this->consultar($sql);
        $this->enlazar(":id", $id);
        return $this->resultado();
    }
}

?>