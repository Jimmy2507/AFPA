<body>
<header>
<div class="TitreSite">
    <span id="typed"></span> 
    <script src="js/jquery.min.js"></script>
    <script src="js/typed.min.js"></script>
    <script src="js/kube.min.js"></script>
    <script src="js/site.js"></script>
    <script>
		function newTyped(){}$(function(){$("#typed").typed({
		// Change to edit type effect
		strings: ["Site","Test"],

		typeSpeed:90,backDelay:700,contentType:"html",loop:!0,resetCallback:function(){newTyped()}}),$(".reset").click(function(){$("#typed").typed("reset")})});
    </script>
     </div>    
</header>