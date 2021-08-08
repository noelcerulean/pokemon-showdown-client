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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6919359669048419" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8427950831749309" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.16130188836720416" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.05669831486334731" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.39879432407839555" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.32232406460256335" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6413781124392097"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5721762649642479" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5103834517705756">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7434490539617165">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5264992388882281">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.023258595462381626">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.03257304961531915"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7017141273272269"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.756802973469741"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4803921025679516"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.29176067652521964"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3132803889331299"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4336236070413306"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.26314550472181475"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4565825875597127"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.986385797726627"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.19092318066631964"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6377984802915364"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.1424623391916755"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.43150221243563136"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.11311940428962708"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.40735353287142595"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.15273419937257748"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9771178613691969"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5646452073434314"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
