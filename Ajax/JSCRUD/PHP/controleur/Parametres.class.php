<?php
class Parametres
{
    private static $host;
    private static $port;
    private static $dbname;
    private static $login;
    private static $pwd;

    /**
     * Get the value of host
     */
    public static function getHost()
    {
        return self::$host;
    }

    /**
     * Get the value of port
     */
    public static function getPort()
    {
        return self::$port;
    }
    /**
     * Get the value of dbname
     */
    public static function getDbname()
    {
        return self::$dbname;
    }

    /**
     * Get the value of login
     */
    public static function getLogin()
    {
        return self::$login;
    }

    /**
     * Get the value of pwd
     */
    public static function getPwd()
    {
        return self::$pwd;
    }

    public static function init()
    {
//on récupere les paramètres de connection base de données

        // si le fichier existe
        if (file_exists("parametres.ini"))
        {//appel habituel depuis index
            $fic = "parametres.ini";
        }
        else{
        // si l'API est appelé, l'appel ce fait depuis le dossier Controller, il faut repartir à la racine
            if (file_exists("../../../parametres.ini"))
            {
                $fic = "../../../parametres.ini";
            }
            else
            {
                echo "Pas de fichier de paramètres";
            }

            $flux = fopen($fic, "r"); //on ouvre le fichier en lecture
            //tant qu'il y a des lignes
            while (!feof($flux))
            {
                $ligne = fgets($flux, 4096);
                if ($ligne) // si la ligne n'est pas vide
                {
                    $info = explode(":", $ligne); // on sépare la ligne selon le ;
                    $param[$info[0]] = rtrim($info[1]); //on remplit un tableau associatif avec la 1ere partie en clé, la 2nde en valeur
                }
            }

            self::$host = $param[0];
            self::$port = $param[1];
            self::$dbname = $param[2];
            self::$login = $param[3];
            self::$pwd = $param[4];
        }
    }

}
