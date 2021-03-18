<?php
function generer($nomClass,$attribut,$nom){
    $nomFile = $nomClass.".class.php";
    $verif = file_exists("U:/59011-15-02/DWWM/".$nom."/class/".$nomFile);
    if($verif == false){
        $f = fopen("U:/59011-15-02/DWWM/".$nom."/class/".$nomFile,"x+");
        $texte = "<?php class $nomClass { \n";
        $texte .= "/*****************Attributs***************** */\n";
        for ($i=0; $i < count($attribut) ; $i++) { 
            $texte .="\t private \$_".$attribut[$i].";\n";
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
    $texte .= "require(\"./Services/methodes.php\");\n";
    $texte .= "function chargementClasse(\$class){
    require(\"./class/\".\$class.\".class.php\");
}
    spl_autoload_register(\"chargementClasse\");\n";

    fputs($f,$texte);
    fclose($f);
    echo "Index crée \n";
    }else{
        echo "Le fichier existe deja ! \n";
    }
}

    function services($nom){
        $nomFile = "methodes.php";
        $verif = file_exists("U:/59011-15-02/DWWM/".$nom."/Services/$nomFile");
        if($verif==false){
            $f=fopen("U:/59011-15-02/DWWM/".$nom."/Services/".$nomFile,"x+");
            $texte = "<?php\n\n";
            $texte .="function Nom (){\n\n}";
            fputs($f,$texte);
            fclose($f);
            echo "Fichier methodes crée.\n";
        }else{
            echo "Le fichier existe deja ";

        }
    
    }
    //A FAIRE : CREATION DES METHODES DANS LES CLASSE 
?>
