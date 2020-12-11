<?php

    class Message extends CI_Model {
        
        public function update($input) {
            $query = "UPDATE messages SET comment = ? WHERE id = ? ";
            $value = array($input['msg'], $input['id']);
    
            return $this->db->query($query,$value);
        }

        public function get_msg($id){
            $query = "SELECT * FROM messages WHERE id = ?";
            $value = array($id);

            return $this->db->query($query,$value)->row_array();
        }

        public function new_note($input){
            $query = "INSERT INTO messages (title, created_at, updated_at) VALUES (?,?,?)";
            $values = array($input['title'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));

            return $this->db->query($query, $values);
        }

        public function get_all_notes(){
            $query = "SELECT * FROM messages";
            return $this->db->query($query)->result_array();
        }

        public function delete($id){
            $query = "DELETE FROM messages WHERE id = ?";
            $values = array($id);

            return $this->db->query($query, $values);
        }

    }

?>