<?php

namespace App\Models;

use App\Core\Model;

class Handphone extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_hp";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $merk = $_POST['merk'];
          $warna = $_POST['warna'];
          $harga = $_POST['harga'];
          $ram = $_POST['ram'];

          $sql = "INSERT INTO tb_hp
            SET merk=:merk,warna=:warna,harga=:harga,ram=:ram";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":merk", $merk);
          $stmt->bindParam(":warna", $warna);
          $stmt->bindParam(":harga", $harga);
          $stmt->bindParam(":ram", $ram);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_hp WHERE id=:id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $merk = $_POST['merk'];
          $warna = $_POST['warna'];
          $harga = $_POST['harga'];
          $ram = $_POST['ram'];
          $id = $_POST['id'];

          $sql = "UPDATE tb_hp
          SET merk=:merk,warna=:warna,harga=:harga,ram=:ram where id=:id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":merk", $merk);
          $stmt->bindParam(":warna", $warna);
          $stmt->bindParam(":harga", $harga);
          $stmt->bindParam(":ram", $ram);
          $stmt->bindParam(":id", $id);

          $stmt->execute();
     }
     public function delete($id)
      {
            $sql = "DELETE FROM tb_hp WHERE id=:id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id", $id);
            $stmt->execute();
      }
}
