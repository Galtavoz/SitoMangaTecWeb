<?php
include("sopra.php");
?>
			<link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/smoothness/jquery-ui.css" />
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" ></script>
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>
			<link rel="stylesheet" type="text/css" media="screen" href="elfinder/css/elfinder.min.css">
			<script type="text/javascript" src="elfinder/js/elfinder.min.js"></script>
			<script type="text/javascript" src="elfinder/js/i18n/elfinder.it.js"></script>
			<script type="text/javascript" charset="utf-8">
				$().ready(function() {
					var elf = $('#elfinder').elfinder({
						// lang: 'ru',             // language (OPTIONAL)
						url : 'elfinder/php/connector.php' 
					}).elfinder('instance');			
				});
			</script>
			<div class="span9">
          		<div class="row-fluid">
					<h2 style="font-variant:small-caps;">Gestione File</h2><br/>
					<div id="elfinder"></div>
				</div>
			</div>
<?php
include("sotto.php");
?>
