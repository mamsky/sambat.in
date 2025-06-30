<?php 

    class Content{
        private $db;

        public function __construct($conn){
            $this->db = $conn;
        }

        public function getContent(){
            $sql = "SELECT auth.id as id_user,auth.name,content.id,content.content FROM auth INNER JOIN content on auth.id = content.id_user";
            return $this->db->query($sql);
        }
        public function getContentById($id){
            $sql = "SELECT content FROM content WHERE id = $id";
            return $this->db->query($sql);
        }

        public function createContent($userId, $content){
            $sql = "INSERT INTO content (id_user, content) VALUES ('$userId', '$content')";
            return $this->db->query($sql);
        }

        public function updateContent($id, $content){
            $sql = "UPDATE content SET content='$content' WHERE id= $id";
            return $this->db->query($sql);
        }

        public function deleteContent ($id){
            $sql = "DELETE FROM content WHERE id = $id";
            return $this->db->query($sql);
        }
    }


?>