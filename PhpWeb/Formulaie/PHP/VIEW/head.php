<!DOCTYPE html>
<html>
<head>
<?php
// initialise une connection
DbConnect::init();
//Si le titre est indiqué, on l'affiche entre les balises <title>
echo (!empty($titre)) ? '<title>' . $titre . '</title>' : '<title>MVC </title>';
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="CSS/style.css">
<script src="js/jquery.min.js"></script>
<script src="js/typed.min.js"></script>
<script src="js/kube.min.js"></script>
<script src="js/site.js"></script>
</head>
<body>