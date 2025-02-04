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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.26326281329523815" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9626596045211915" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.41361187257234633" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7366534634633566" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.20085965381581605" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.31737540604285464" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6991501826264177"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8085872145527555" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.373427765263582">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5488876243558316">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5769100490344479">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5429090959071214">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5397179813127055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9670180042023706"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5994740598027299"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.31807473282278664"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.08212624355681486"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.06497089042873472"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.1415376819714247"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8606928478920499"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9740163093462368"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5198169500178278"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.30538012944226356"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.28550595145739277"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3908839687564136"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.812094436440806"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.47623846778700885"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7761630344856314"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.35844134008730366"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.1907276723715714"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6751192546323679"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
