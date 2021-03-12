<?php
function generer($nomClass,$attribut){
    $nomFile = $nomClass.".class.php";
    $verif = file_exists("./BDD/".$nomFile);
    if($verif == false){
        $f = fopen("./BDD/".$nomFile,"x+");
        $texte = "<?php class $nomClass { \n";
        $texte .= " /*****************Attributs***************** */\n";
        for ($i=0; $i < count($attribut) ; $i++) { 
            $texte .="\t private \$_".$attribut[$i].";\n";
        }
        $texte .= " /*****************Accesseurs***************** */\n";

        for ($i=0; $i < count($attribut); $i++) { 
            //getter
            $texte .= "public function get".ucfirst($attribut[$i])."(){\n";
            $texte .= "\t return \$this->_".$attribut[$i].";\n}\n";
            //setter
            $texte .= "public function set".ucfirst($attribut[$i])."($".$attribut[$i]."){\n";
            $texte .= "\t \$this->_$attribut[$i] = $$attribut[$i];\n}\n";

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
        }";
        $texte .= "\n}";
        fputs($f,$texte);

        fclose($f);
        
    }else{
        echo "Le fichier existe deja ";
    }
}
?>