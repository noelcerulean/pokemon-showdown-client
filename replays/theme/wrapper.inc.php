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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7276610104560663" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.15691896002720251" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8754363592906556" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7492117248393511" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.26917065457519107" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.657946267768011" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.08795511443755566"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.10423894425215541" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9292077877541332">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4625737076360683">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.17419668616615835">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.28234887995351143">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.19274465252175044"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9719606050310221"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.21165299400189963"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.00873074529363338"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3852397606493039"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.16280296866622668"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7941433789650933"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5106481762343837"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7277892770460779"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.10077239626405698"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.370920895323533"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8551574488286138"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.16628190062695314"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5673295712441626"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6074021015430742"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.305107863783171"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7454852367469351"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9907778563801062"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7464252693718598"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
