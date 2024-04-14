<?php

require('./config/database.php');

class PortofolioModel{

  private $table = 'portofolio';

  public function read(){
    global $conn;
    $query = "SELECT * FROM ".$this->table;
    $result = mysqli_query($conn, $query);
    $data = [];
    if ($result->num_rows > 0) {
      while($a = $result->fetch_assoc()) {
        array_push($data, $a);
      }
    }
    return $data;
  }

  public function create($nama, $deskripsi, $link, $tgl){
    global $conn;
    $state = $conn->prepare("INSERT INTO ".$this->table." (nama_porto, deskripsi_porto, link_porto, tgl_upload, user_id) VALUES (?,?,?,?,?)");
    $state->bind_param("ssssi", $nama, $deskripsi, $link, $tgl, 2);
    $state->execute();
    $state->close();
    return "Success";
  }

  public function detail($id){
    global $conn;
    $query = "SELECT * FROM ".$this->table." WHERE id_porto=".$id;
    $result = mysqli_query($conn, $query);
    if ($result->num_rows > 0) {
      $data = mysqli_fetch_object($result);
    }
    else {
      $data = [];
    }
    return $data;
  }

  public function update($id, $nama, $deskripsi, $link, $tgl){
    global $conn;
    $state = $conn->prepare("UPDATE ".$this->table." SET nama_porto=?, deskripsi_porto=?, link_porto=?, tgl_upload=? WHERE id_porto=".$id);
    $state->bind_param("ssss", $nama, $deskripsi, $link, $tgl);
    $state->execute();
    $state->close();
    return "Success";
  }

  public function delete($id){
    global $conn;
    $query = "DELETE FROM ".$this->table." WHERE id_porto=".$id;
    $result = mysqli_query($conn, $query);
    return "Success";
  }
}