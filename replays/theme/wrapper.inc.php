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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.38314129270348385" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8773198309283619" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4996844518001704" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5562166055153752" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9485112444358295" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6541759799251419" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.1638078076190772"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6036203001017819" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2691204508534544">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1738723455369282">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7327394280347161">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.16912898251468245">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8993914681014581"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.861650236838551"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.012877491245417927"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5004358737534389"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7449000169997733"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.06925453948475901"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.20836265122574504"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.12926554958259184"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.46566765171378544"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.0037666963553661947"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.09635715904326014"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5566791998545386"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.05954737639410679"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.07753593586288243"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2698680581252604"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6836012573023784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9503466009044836"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5868246305974074"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5457017341411818"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
