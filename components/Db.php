<?php
class Db
{
    public static function getConnection()
    {
        $paramsPath = ROOT.'/config/db_params.php';
        $params = include ($paramsPath);

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $dn = new PDO($dsn, $params['user'], $params['password']);

        return $dn;
    }
}