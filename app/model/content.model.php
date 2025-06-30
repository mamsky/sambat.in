<?php 

    class Content{
        private $db;

        public function __construct($conn){
            $this->db = $conn;
        }

        public function getContent(){
            $sql = "SELECT * FROM content";
            return $this->db->query($sql);
        }

        public function createContent($userId, $content){
            $sql = "INSERT INTO content (id_user, content) VALUES ('$userId', '$content')";
            return $this->db->query($sql);
        }

        public function updateContent($id, $content){
            $sql = "UPDATE content SET content=$content WHERE id= $id";
            return $this->db->query($sql);
        }

        public function deleteContent ($id){
            $sql = "DELETE FROM content WHERE id = $id";
            return $this->db->query($sql);
        }
    }


?>