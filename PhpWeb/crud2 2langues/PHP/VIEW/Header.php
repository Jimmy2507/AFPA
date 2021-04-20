<?php
$uri = $_SERVER['REQUEST_URI'];
if (substr($uri, strlen($uri) - 1) == "/") // se termine par /
{
    $uri .= "index.php?";
}
else if (in_array("?", str_split($uri))) // si l'uri contient deja un ?
{
    $uri .= "&";
}
else
{
    $uri .= "?";
}?>

<body>
<header>
    <div></div>
    <div class="Titre">
    <?php echo texte('titrePage'); ?></div>
    </div>
    <div>
    <a href="<?php echo $uri; ?>lang=FR">
        <button class="btn">Fr</button>
    </a>

    <a href="<?php echo $uri; ?>lang=EN">
        <button class="btn">EN</button>
    </a>
    </div>
</header>
<main>
