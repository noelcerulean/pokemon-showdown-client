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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.24813481976744978" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.23727727189195336" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.36663310177456987" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3565382036098894" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5089071415605033" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.15660845539010082" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9749899300666514"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.15717386906077224" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6501604876629683">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.840307754148502">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.523967262030149">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4364677958668437">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.36495801291944585"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5172816173820891"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6569165518352538"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.46768550387984353"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4701270646396749"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7507525458083075"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8602711429439871"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4674028659580052"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.37773177548364134"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6147214818244731"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.28850206183846594"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.43508395361440466"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.052229305678516136"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6817904471948824"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.24315126142811883"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9882932220179452"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8951720176673776"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.889872429848021"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.08746052557490325"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
