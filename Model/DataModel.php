<?php
class DataModel extends Database {
    public function __construct() {
        $db = new Database;
        $this->conn = $db->conn;
    }

    public function Data($id_users) {
        $query = "SELECT username FROM users WHERE id_users='$id_users'";
        $result = $this->conn->query($query);
        $usernames = array();
        while ($row = $result->fetch_assoc()) {
            $usernames[] = $row['username'];
        }

        $this->conn->close();

        return $usernames;
    }
}
