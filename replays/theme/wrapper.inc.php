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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6697535437193343" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9092206893274202" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.14300255811696916" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5522046391930753" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6545294589776813" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.388035808464702" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.1556545360980779"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.10327272070321403" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7983008557739757">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4502164895755896">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8248177078695411">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6480082299197931">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4307189101950659"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6072309393555266"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5778060438379304"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7679307218922673"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4340667987183384"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7943487618217584"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9455653831058728"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5428981425677759"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.11745338466901467"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.814660938645654"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3245441455106146"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.26639733075366134"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4436309815901749"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8061300497461337"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2802388632892494"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.12167520391345321"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.15499347411635545"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6982567954316077"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.08465033805757427"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
