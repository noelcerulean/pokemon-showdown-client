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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9903457611215347" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8491002655005053" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.924971316044491" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9219873964667495" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9232842831732855" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9253188281922435" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6155528561961698"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.11553674046904394" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4133224383843994">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5747988109844111">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6531327207825792">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6124256443331433">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9281846091212571"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9661595253500037"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.19027545046688243"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.09082160174813936"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.49912409121221457"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.16998925945304522"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9674069452542209"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4271247021314688"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3132168999023208"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5023511340495697"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7075670238547953"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.753971213819246"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6454643984802759"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9444998008910468"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8326719411967203"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.10059085354987518"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9322250049145089"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.549824056985253"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5797518445427008"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
