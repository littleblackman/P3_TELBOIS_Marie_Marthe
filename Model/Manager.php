<?php

class Manager

{

    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=P3_TELBOISMM;charset=utf8', 'root', 'root');
        return $db;
    }

}
