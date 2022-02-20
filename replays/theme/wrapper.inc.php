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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8585789800918167" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9292451599414007" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7448238770085422" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2652316171039819" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7606692611911539" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6944042670533763" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.1157162705802599"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.605640079506905" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8791704659920261">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8132233220188763">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.23372281106171844">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.17632350644607597">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9942664990649008"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.08947488912244395"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3920752462883246"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.49130881554182637"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6454170628628664"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.23326002214690034"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.47370206181976626"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7528809915794057"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5264042910320403"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.09874205255194712"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.36642000185516466"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.984588947388574"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.760615037500066"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9675829154624813"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2914547322306267"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.03879925085064784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8335202439116998"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7424403888286899"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.255190153673696"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
