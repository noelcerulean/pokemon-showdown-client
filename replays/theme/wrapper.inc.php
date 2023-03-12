<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3707871292521443" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9901853758623915" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6088578963124551" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6203578675288319" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.46243148457179317" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.19293044218962696" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5219905090689518"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.19278830550321024" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.06941302364964264">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7891657252790611">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9620329353572932">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.31251042161916076">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.24059100254163823"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6075892402390135"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.45198831970715747"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.12486135577259216"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4078298826440545"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.503728624151363"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6444107649945114"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3996807645838334"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5327289452724084"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7734672018269995"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.29433107619196464"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6958054599685013"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3134122683017302"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.29666157528474013"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3295781983015005"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.22178043770630218"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.45894945873469783"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7205600691042187"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.04742357188795365"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
