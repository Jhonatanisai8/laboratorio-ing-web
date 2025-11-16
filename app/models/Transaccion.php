<?php

class Transaccion extends Model
{
    public function getAll()
    {
        $stm = $this->db->prepare("SELECT * FROM transacciones ORDER BY fecha_transaccion DESC");
        $stm->execute();
        return $stm->fetchAll();
    }

    public function create($data)
    {
        $sql = "INSERT INTO transacciones(id_producto, nombre_producto, cantidad, precio_unitario, subtotal, igv, total) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stm = $this->db->prepare($sql);
        return $stm->execute([
            $data["id_producto"],
            $data["nombre_producto"],
            $data["cantidad"],
            $data["precio_unitario"],
            $data["subtotal"],
            $data["igv"],
            $data["total"]
        ]);
    }
}
