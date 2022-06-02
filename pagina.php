<html>

<head>
<title> Meu primeiro site em PHP! AEEEEE!</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>jQuery UI Accordion - Default functionality</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

<script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>

<style type="text/css">
    .linha {
	  font-weight: bold;
	  color: black;
	  padding-left: 50px;
	  line-height: 25px;
    }
</style>

</head>

<body>
<h1>Página PHP</h1>
<?php
echo"SEJA BEM VINDO";
?>

<div id="accordion">

<?php 

$texto = "texto em breve";

for ($i = 0 ; $i<5 ; $i++ ) {

print( "<span class=\"linha\">Linha número " . $i . " </span><br />");

}

?>
</div>

<script type="text/javascript">
$(document).ready(function() {
	alert("MARAVIILHAAA");
});
</script>