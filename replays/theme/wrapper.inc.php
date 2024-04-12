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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.19966580993083105" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.39787438272935205" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6006915341141974" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4789311320177403" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7165325080041891" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.33529682091456614" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4796460384728496"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.40608397541131325" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9942624437262486">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2149889089544852">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.796206236980995">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3510942036457314">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.05633528361584772"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.2734872184407462"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3117170369444806"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.23613968013581177"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5983551640872689"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4199561843925512"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3560586765109002"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8520373006969304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3028591632352806"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.40664780119080324"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.135096672470558"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5760255874955578"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3506798633127681"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.25143713267974177"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5782761040934687"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.23910485645021007"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3812157850098983"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7319211848037224"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.14260172764183854"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
