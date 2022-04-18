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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.979161447153464" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.45576486492892565" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.31993900233749284" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.38076582746595067" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4219317867500354" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.771858308876979" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6910754560690284"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.43915081262611877" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3992497505154884">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8517014739629467">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7043266335726834">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4833173854228552">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9902966257359631"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.11653335202531667"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.12770435254878243"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.338807633074089"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.37877131578386813"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9510967457612785"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.224503477550549"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.40878923360299213"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.859483188877405"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.25525676737315317"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.30129478149774447"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7507071254503328"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.29153964281045575"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2596021634400132"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9884266806159128"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9788598147754288"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9450987532890698"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7444512499263105"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.25169885859002505"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
