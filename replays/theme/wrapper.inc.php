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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.46550843013138166" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8359867536133123" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4075354083849454" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6783826444246075" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9933018962459177" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.17507678232966395" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5531520093862485"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9254132870941614" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5398147009796577">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.798580964433024">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7314441191871195">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.907828524343913">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6770160189050405"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7561234853473413"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6016424851344431"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.08532527753368102"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.00038630505840941964"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.20443321839234674"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8774348296345156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.1076618206097788"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9734165678410258"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3915657431420807"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7884687580320475"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5177276327397862"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9380584645339598"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.04928034180339358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.772337701663969"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8416134260365886"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8000926813524574"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.913509124181612"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7330042862729289"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
