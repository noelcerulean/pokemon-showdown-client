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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5043161178082645" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.36000570756132055" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3911269572909222" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.08004345579700134" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.14341763635891636" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.06747175825775886" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2441847377634616"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8919225687026124" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.37481433392592467">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5240415621103063">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.267035557670841">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6834351329855273">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7358060288030841"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6444651737473377"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.19921221321054294"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7346878247643813"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6548860265425633"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3587916197354093"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5774725003468157"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.20704150062413973"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7047069159787638"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.16934188187356414"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5979620246982116"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3405241842287521"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5486024926827631"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.29438299685969493"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8987050211225265"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7487057535442989"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5593895719187942"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3545130986573155"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.27122492371549844"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
