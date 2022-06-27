<?php
namespace Projet\Models;
use FFI\Exception;


class Manager
{
    protected function dbConnect()
    {

        try {
            $bdd = new \PDO('mysql:host=localhost;dbname=kercode-mvc;charset=utf8', 'root', '');
            return $bdd;
        } catch (Exception $e) {

            die('Erreur : ' . $e->getMessage());
        }
    }

    protected static function dbCnx()
    {

        try {
            $bdd = new \PDO('mysql:host=localhost;dbname=kercode-mvc;charset=utf8', 'root', '');
            return $bdd;
        } catch (Exception $e) {

            die('Erreur : ' . $e->getMessage());
        }
    }
}