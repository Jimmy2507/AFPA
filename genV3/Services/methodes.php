<?php
function genererClass($nomClass,$attribut,$nom){
    $nomFile = $nomClass.".class.php";
    $verif = file_exists("U:/59011-15-02/DWWM/".$nom."/PHP/CONTROLLER/".$nomFile);
    if($verif == false){
        $f = fopen("U:/59011-15-02/DWWM/".$nom."/PHP/CONTROLLER/".$nomFile,"x+");
        $texte = "<?php class $nomClass { \n";
        $texte .= "/*****************Attributs***************** */\n";
        for ($i=0; $i < count($attribut) ; $i++) { 
            $texte .="\t private \$_".lcfirst($attribut[$i]).";\n";
        }
        $texte .= "/*****************Accesseurs***************** */\n";

        for ($i=0; $i < count($attribut); $i++) { 
            //getter
            $texte .= "public function get".ucfirst($attribut[$i])."(){\n";
            $texte .= "\treturn \$this->_".$attribut[$i].";\n}\n";
            //setter
            $texte .= "public function set".ucfirst($attribut[$i])."($".$attribut[$i]."){\n";
            $texte .= "\t\$this->_$attribut[$i] = $$attribut[$i];\n}\n";

        }
        $texte .= "/*****************Constructeur******************/ \n";
        $texte .= "public function __construct(array \$options = [])
{
    if (!empty(\$options)) // empty : renvoi vrai si le tableau est vide
    {
        \$this->hydrate(\$options);
    }
}
public function hydrate(\$data)
{
    foreach (\$data as \$key => \$value)
    {
        \$methode = \"set\" . ucfirst(\$key); //ucfirst met la 1ere lettre en majuscule
        if (is_callable(([\$this, \$methode]))) // is_callable verifie que la methode existe
        {
            \$this->\$methode(\$value);
        }
    }
}\n";
        $texte .= "/*****************Autres Méthodes***************** */ \n";
        $texte .= "    /**
    * Transforme l'objet en chaine de caractères
    *
    * @return String
    */
   public function toString()
   {
       return \"\";
   }

   /**
    * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
    *
    * @param [type] \$obj
    * @return bool
    */
   public function equalsTo(\$obj)
   {
       return true;
   }
   /**
    * Compare 2 objets
    * Renvoi 1 si le 1er est >
    *        0 si ils sont égaux
    *        -1 si le 1er est <
    *
    * @param [type] \$obj1
    * @param [type] \$obj2
    * @return void
    */
   public static function compareTo(\$obj1, \$obj2)
   {
       return 0;
   }";
        $texte .= "\n}";
        fputs($f,$texte);

        fclose($f);
        echo "Class :".$nomClass." crée\n";
        
    }else{
        echo "Le fichier existe deja ";
    }
}

function index($nom){
    $nomFile = "index.php";
    $verif = file_exists("U:/59011-15-02/DWWM/".$nom."/index.php");
    if($verif==false){
        $f=fopen("U:/59011-15-02/DWWM/".$nom."/".$nomFile,"x+");
    $texte = "<?php\n";
    $texte .= "
    include \"PHP/VIEW/Head.php\";";

    fputs($f,$texte);
    fclose($f);
    echo "Index crée \n";
    }else{
        echo "Le fichier existe deja ! \n";
    }
}
    function CSS($nom){
        $nomFile = "style.css";
        $verif = file_exists("U:/59011-15-02/DWWM/".$nom."/CSS/style.css");
        if($verif==false){
            $f=fopen("U:/59011-15-02/DWWM/".$nom."/CSS/".$nomFile,"x+");
            fclose($f);
        echo "style crée \n";
        }else{
            echo "Fichier CSS deja crée";
        }
    }

    function dbConnect($nom,$nomBDD){
        $nomFile = "dbConnect.Class.php";
        $verif = file_exists("U:/59011-15-02/DWWM/".$nom."/dbConnect.Class.php");
        if($verif==false){
            $f=fopen("U:/59011-15-02/DWWM/".$nom."/PHP/MODEL/".$nomFile,"x+");
        $texte = "<?php\n";
        $texte .= "
        class DbConnect {
            private static \$db;
            public static function getDb() {
                return DbConnect::\$db;
            }
            public static function init() {
                try {
                    self::\$db= new PDO ( 'mysql:host=localhost;dbname=".$nomBDD.";charset=utf8', 'root', '');
                } catch ( Exception \$e ) {
                    die ( 'Erreur : ' . \$e->getMessage () );
                }
                
            }
        }";
        fputs($f,$texte);
        fclose($f);
        echo "dbConnect Crée \n";
        }else{
            echo "Le fichier existe deja ! \n";
        }
    }
    //***************************CREATION MANAGER ************************************ */
    function Manager($nom,$nomBDD,$nomClass,$attribut){
        $nomFile = $nomClass."Manager.Class.php";
        $verif = file_exists("U:/59011-15-02/DWWM/".$nom."/".$nomFile);
        if($verif==false){
            $f=fopen("U:/59011-15-02/DWWM/".$nom."/PHP/MODEL/".$nomFile,"x+");
            //FONCTION AJOUTER DANS LA BDD
$texte = "<?php\n";
$texte .= 'class '.$nomClass."Manager{\n";
$texte .= 'public static function add('.$nomClass.' $objet){
    $db = DbConnect::getDb();
    $q = $db->prepare("INSERT INTO '.$nomClass.'(';
        for ($i=0; $i < count($attribut) ; $i++) { 
            $texte .=$attribut[$i].',';
        }
        $texte.=') VALUES (';
        for ($i=0; $i < count($attribut); $i++) { 
            $texte .= ":".$attribut[$i].',';
        }
        $texte .= ")\");\n";
        for ($i=0; $i < count($attribut); $i++) { 
            $texte .= '$q->bindValue(":'.$attribut[$i].'",$objet->get'.ucfirst($attribut[$i])."());\n";
        }
        $texte .='$q->execute();
            }'."\n\n";
        //************************UPDATE BDD ***************************************************** */
        $texte .=' public static function update('.$nomClass.' $objet'."){\n";
        $texte .= "\t".'$db = DbConnect::getDb();';
        $texte .= "\t".'$q = $db->prepare("UPDATE '.$nomClass.' SET ***** WHERE *****");'."\n";
            for ($i=0; $i < count($attribut); $i++) { 
                $texte .= '$q->bindValue(":'.$attribut[$i].'",$objet->get'.ucfirst($attribut[$i])."());\n";
            }
        $texte .="\t".'$q->execute();'."\n}\n\n";

        //******************************SUPPRIMER BDD************************************************ */
            $texte .= 'public static function delete('.$nomClass.' $objet){'."\n";
            $texte .= '$db = DbConnect::getDb();'."\n";
            $texte .= '$db->exec("DELETE FROM '.$nomClass.' WHERE id'.ucfirst($nomClass).'=" . $objet->getId'.ucfirst($nomClass).'());'."\n}\n\n";

        //******************************findById******************************************************** */

            $texte.='public static function findById($id){
    $db = DbConnect::getDb();
    $id = (int) $id;  //Verifie pour eviter injection sql
    $q = $db->query("SELECT * FROM '.$nomClass.' WHERE id'.$nomClass.'=" . $id);
    $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false){
            return new '.$nomClass.'($results);
        }
        else{
            return false;
        }
    }';
        //*****************************************getList *********************************************** */
            $texte .= 'public static function getList(){
    $db = DbConnect::getDb();
    $liste = [];
    $q = $db->query("SELECT * FROM '.$nomClass.' order by nomRole");
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC)){
        if ($donnees != false){
            $liste[] = new '.$nomClass.'($donnees);
        }
    }
    return $liste;  // tableau contenant les objets Roles
}'."\n\n}";
        fputs($f,$texte);
        fclose($f);
        echo "Manager Crée \n";
        }else{
            echo "Le fichier existe deja ! \n";
        }
    }

    function CreeHead($nom){
        $nomFile = "Head.php";
        $verif = file_exists("U:/59011-15-02/DWWM/".$nom."/".$nomFile);
        if($verif==false){
            $f=fopen("U:/59011-15-02/DWWM/".$nom."/PHP/VIEW/".$nomFile,"x+");
        $texte = "<!DOCTYPE html>
                  <html lang=\"fr\">\n";
        $texte .= "<head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>Document</title>
        <?php
        if (file_exists(\"./CSS/style.css\"))
            {
                echo '<link rel=\"stylesheet\" href=\"./CSS/style.css\">'; // quand on vient de index.php
            }
            else if (file_exists(\"../../CSS/style.css\"))
            {
                echo '<link rel=\"stylesheet\" href=\"../../CSS/style.css\">';  // quand on vient du dossier VIEW
            }
            ?>
    </head>
    
    <?php
    /* Autoload permet de charger toutes les classes necessaires */
    function ChargerClasse(\$classe)
    {
        if (file_exists(\"PHP/CONTROLLER/\" . \$classe . \".Class.php\"))
        {
            require \"PHP/CONTROLLER/\" . \$classe . \".Class.php\"; // quand on vient de index.php
        }
        else if (file_exists(\"../CONTROLLER/\" . \$classe . \".Class.php\"))
        {
            require \"../CONTROLLER/\" . \$classe . \".Class.php\"; // quand on vient du dossier VIEW
        }
        if (file_exists(\"PHP/MODEL/\" . \$classe . \".Class.php\"))
        {
            require \"PHP/MODEL/\" . \$classe . \".Class.php\"; // quand on vient de index.php
        }
        else if (file_exists(\"../MODEL/\" . \$classe . \".Class.php\"))
        {
            require \"../MODEL/\" . \$classe . \".Class.php\"; // quand on vient du dossier VIEW
    
        }
    }
    spl_autoload_register(\"ChargerClasse\");
    
    DbConnect::init();";
        fputs($f,$texte);
        fclose($f);
        echo "Head Crée \n";

        }else{
            echo "Le fichier existe deja ! \n";
        }
    }




?>
