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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.17988475119551794" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.16746612998868793" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.48199111208694934" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.605990504203552" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.965292822272966" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7475640565957222" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6660712822316863"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.154146694850829" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6221076337237252">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7641250470946128">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4320100780020717">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.678912759192656">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4806329870474326"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.1749696703870851"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3513501948658688"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6809896060398644"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.0038415153339437236"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3914370288183917"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.18855945232583804"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.12730806549224294"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7109279209643902"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8810954638305462"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.16207307439904173"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.29347735821618937"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4251539774888815"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5483251417329857"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.907112244838794"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.33692254971395497"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.43513856135074724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2556154096194925"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5574985298682196"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
