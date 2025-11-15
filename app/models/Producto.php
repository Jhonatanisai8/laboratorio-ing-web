<?php

class Producto extends Model
{
    public function getAll()
    {
        $stm = $this->db->prepare("SELECT * FROM producto");
        $stm->execute();
        return $stm->fetchAll();
    }

    public function getById($id)
    {
        $stm = $this->db->prepare("SELECT * FROM producto WHERE id_producto = ?");
        $stm->execute($_GET["id"]);
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $stm = $this->db->prepare("INSERT INTO producto(codigo,descripcion,inventariable,stock,activo) values (?,?,?,?,?)");
        return $stm->execute([$data["codigo"], $data["descripcion"], $data["inventariable"], $data["stock"], $data["activo"]]);
    }

    public function update($data, $id)
    {
        $stm = $this->db->prepare("UPDATE producto SET codigo = ?, descripcion= ?,inventariable = ?,stock = ?,activo = ? ) WHERE id_producto = ?");
        return $stm->execute([$data["codigo"], $data["descripcion"], $data["inventariable"], $data["stock"], $data["activo"], $id]);
    }


    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM producto WHERE id_producto = ?");
        return $stmt->execute([$id]);
    }

}
