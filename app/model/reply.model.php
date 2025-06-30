<?php 

class Reply{
    private $db;

    public function __construct($conn){
        $this->db = $conn;
    }

    public function getReply($id){
        $sql = "SELECT auth.id as uId ,auth.name, reply.id as rId, reply.reply FROM auth INNER JOIN reply ON auth.id = reply.id_user WHERE id_content = $id";
        return $this->db->query($sql);
    }

    public function createReply($id,$idUser, $reply){
        $sql = "INSERT INTO reply (id_content,id_user, reply) VALUES ('$id','$idUser', '$reply')";
        return $this->db->query($sql);
    }

    public function editReply($id, $reply){
        $sql = "UPDATE reply SET reply=$reply WHERE id=$id";
        return $this->db->query($sql);
    }

    public function deleteReply($id){
        $sql = "DELETE FROM reply WHERE id = $id";
        return $this->db->query($sql);
    }

}

?>