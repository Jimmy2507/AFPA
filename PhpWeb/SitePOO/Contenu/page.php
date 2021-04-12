<section id="contenu">
    <div class="Contour Colonne">
        <div>
            <div class="EspaceVertical"></div>
            <div class="Colonne Paragraphe">
                
                <?php
                    for ($i=0; $i < count($personne); $i++) { 
                        echo '<div class = "Titre">
                                <h1>Personne n° '.$i.'</h1></div>
                        <div></div>
                        <a href="detail.php?id='.$i.'">
                            <div class="Texte">
                                <div></div>
                                    '.$personne[$i]->toString().'
                                <div></div>
                            </div>
                        </a>
                            <div></div>
                        ';
                    }
                    
                ?>
            </div>
            <div class="EspaceVertical"></div>
        </div>
    </div>
</section>