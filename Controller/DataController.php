<?php
session_start();
class DataController
{
    public function showUsername()
    {
        $userModel = new DataModel();
        $usernames = $userModel->Data($_SESSION['id_users']);
    
        return $usernames;
    }
}
