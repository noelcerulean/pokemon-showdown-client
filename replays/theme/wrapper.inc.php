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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.29146781685637824" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6932513518825261" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.250743834224604" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.20922526939811714" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.32920552882135046" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.26453806573759286" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.1949508367512438"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8153122230014305" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6424666965190446">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9835594366491633">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.014954967609858594">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.2704049037559373">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6295636779511924"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7385658440189227"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7064759325624415"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4712127975224105"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5623385028737933"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.28112503170945424"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8157813664689524"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.09690291431282039"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7880506523151292"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5793491923891672"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6106538482680139"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9971187073985757"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9541391838913778"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4332266328395469"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9055035698308864"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9372340919329809"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6457173439780011"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.949856486889584"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9788258881018128"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
