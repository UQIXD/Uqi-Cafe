<?php 
class Gallery
{
    private $mysqli;
    function __construct($conn)
    {
        $this->mysqli = $conn;
    }

    public function TampilGallery()
    {
        // $id = null
        $db = $this->mysqli->conn;
        $sql = "Select * from Gallery";
        // if ($id !=null){
        //     $sql .= " Where ID = $id";
        // }
        $query = $db->query($sql) or die($db->error);
        return $query;
    }

    public function TambahGallery($nama, $foto)
    {
        $db = $this->mysqli->conn;
        $sql = "Insert into Galery values ('','$nama','$foto')";
        $query = $db->query($sql) or die($db->error);
    }
}

?>