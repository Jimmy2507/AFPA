<section id="contenu">
    <div class="Contour Ligne">
        <div>
            <div class="EspaceVertical"></div>
            <div class="Ligne Paragraphe">
                
                <?php
                    $personne[]= new Personne(array("Prenom"=>"Toto","Nom"=>"Tata","Age"=>18));
                    $personne[]= new Personne(array("Prenom"=>"Tutu","Nom"=>"Toto","Age"=>32));
                    $personne[]= new Personne(array("Prenom"=>"Didier","Nom"=>"Tata","Age"=>45));
                    $personne[]= new Personne(array("Prenom"=>"Pascal","Nom"=>"Tata","Age"=>8));
                    $personne[]=new Personne(array("Prenom"=>"TEst","Nom"=>"TEST","Age"=>10));
                    for ($i=0; $i < count($personne); $i++) { 
                        echo '<div class = "Titre">
                                <h1>Personne n° '.$i.'</h1></div>
                        <div></div>
                        <div class="Texte">
                            <div></div>
                                '.$personne[$i]->toString().'
                            <div></div>
                        </div>
                        <div></div>
                        ';
                    }
                ?>
            </div>
            <div class="EspaceVertical"></div>
        </div>
    </div>
</section>