<section id="contenu">
    <div class="Contour Colonne">
        <div>
            <div class="EspaceVertical"></div>
            <div class="Colonne Paragraphe">
                
                <?php
                    for ($i=0; $i < count($agence); $i++) { 
                        echo '<div class = "Titre">
                                <h1>Agence : '.$agence[$i]->getNom().'</h1></div>
                        <div></div>';
                        for ($k=0; $k < count($employe) ; $k++) { 

                            if($agence[$i]->getNom()==$employe[$k]->getAgence()->getNom()){

                                 echo'<a href="detail.php?id='.$k.'">
                                <div class="Texte">
                                    <div></div>
                                        Nom: '.$employe[$k]->getNom().'
                                    <div></div>
                                </div>
                            </a>
                                <div></div>
                            '; 
                              
                            }
                           
                        }
                        
                    }
                ?>
            </div>
            <div class="EspaceVertical"></div>
        </div>
    </div>
</section>