<?php

namespace PDOConnection\App;

use PDO;
use PDOException;

abstract class Connection
{
    private const DBDRIVER  = 'mysql';
    private const DBHOST    = 'localhost';
    private const DBNAME    = 'dev_db';
    private const DBUSER    = 'root';
    private const DBPASS    = '';
    private const DBOPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];

    private static $instance;// Armazena o objeto PDO

    /**
     * @return object | PDO | string
     */
    public final static function getConnection()//: PDO
    {
        // Garante que uma conexão por usuário.
        if(empty(self::$instance))
        {
            try{
                self::$instance = new PDO(
                    self::DBDRIVER . ":host=" . self::DBHOST . ";dbname=" . self::DBNAME,
                    self::DBUSER,
                    self::DBPASS,
                    self::DBOPTIONS
                );
            }catch (PDOException $exception){
                return null;
            }
        }

        return self::$instance;
    }
}