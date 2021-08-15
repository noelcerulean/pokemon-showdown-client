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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7707795780290081" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4787780120105287" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6203681384519146" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6422765553817189" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5076737083922236" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6612153709277209" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2554686562325428"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.34526594739896166" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8576935243708919">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5571590724051645">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.16659885625658322">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.707994826706843">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4936929801405723"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.47899469070136425"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.822382311559376"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.33407556899587854"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7392667803261026"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4970606081083624"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9258165580649385"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.26611183124376203"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.13669378119037723"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9076451727794879"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5998417526323987"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.015329175732301525"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6383471754549177"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6251600983306032"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5212237267081496"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5814568632028807"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8902916844792759"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7389989840436235"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.07797232884513239"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
