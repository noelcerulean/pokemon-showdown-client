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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4080103641152377" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8132261151136084" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.38636062792661785" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6802209750271597" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6529973055599148" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9630633590340361" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.30654157690912576"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.12777407107798378" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0969422413569172">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5915674786448526">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.14732106499889897">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5606075810601474">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9905481746571547"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.47586167406781454"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9823003407778435"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2900802832608069"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2718571371561753"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5534297835389062"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3415694978403103"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.39704689358809886"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.913092834448765"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5701524156928242"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.809033717569213"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3258717123047463"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.15540930429443844"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4469316037404185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.1540948687180852"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7911558894298119"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7835531409026923"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.14044167190920143"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.20607970638384665"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
