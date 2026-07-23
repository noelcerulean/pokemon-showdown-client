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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8062546828127601" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8285274871819912" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.17812159280169504" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.23002192535531463" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3172940342955344" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.01974754726416106" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5602882929872945"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.542858004849865" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.32955638402654563">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.640163122335516">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.010811443194187476">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.11304387349277767">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.07224357700483752"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3219114974603101"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9223800507452173"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.15103716817216495"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.052975628068314906"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.23061419286396068"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.37575463518288843"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.12267068232092626"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9566723759024327"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.30377395744192737"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7909952939129157"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.22973391295294632"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6811827862711328"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.979352406271043"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7374589331977424"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.11585275634644643"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7114577401677449"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.015451986572558418"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7324473924659822"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
