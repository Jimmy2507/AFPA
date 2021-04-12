<?
    $agence[] = new Agence(array("Nom"=>"renault","Adresse"=>"96 rue de tata","CodePostale"=>"59240","Ville"=>"Dunkerque","Restauration"=>"ticket restaurant"));
    $agence[] = new Agence(array("Nom"=>"Mercedes","Adresse"=>"38 rue de tutu","CodePostale"=>"59210","Ville"=>"cdk","Restauration"=>"Restaurant"));
    $agence[] = new Agence(array("Nom"=>"Audi","Adresse"=>"26 rue de ttoto","CodePostale"=>"59430","Ville"=>"stpol","Restauration"=>"ticket restaurant"));

    $employe[] = new Employe(array("Nom"=>"Toto","prenom"=>"Tata","dateEmbauche"=>"2012-09-11","poste"=>"employe","salaire"=>12,"service"=>"cuisine","Agence"=>$agence[0]));
    $employe[] = new Employe (array("Nom"=>"Deschamps","Prenom"=>"Didier","dateEmbauche"=>"2021-01-01","poste"=>"employe","salaire"=>38,"Service"=>"soudeur","Agence"=>$agence[1]));
    $employe[] = new Employe (array("Nom"=>"Deuf","Prenom"=>"John","dateEmbauche"=>"2020-03-12","poste"=>"employe","salaire"=>60,"Service"=>"serveur","Agence"=>$agence[2]));
    $employe[] = new Employe (array("Nom"=>"Duriff","Prenom"=>"Sylvain","dateEmbauche"=>"2017-06-11","poste"=>"employe","salaire"=>72,"Service"=>"grand monarque","Agence"=>$agence[1]));
    $employe[] = new Employe (array("Nom"=>"Sarkozy","Prenom"=>"Nico","dateEmbauche"=>"2015-07-06","poste"=>"employe","salaire"=>5,"Service"=>"boulanger","Agence"=>$agence[0]));