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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4338237506483409" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2173924416995996" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4774391812121419" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.05865135910713004" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5219608473811499" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3397024704209435" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9069396533393468"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9857716870034785" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8370129774280843">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.47123269119642397">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6057741893175441">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.027931439021379623">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.36838778969172536"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.1146170218699778"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4298361749692734"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6382457987531236"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7717047971158979"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.35839500899161103"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.09999794124550765"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.41621388898498557"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.07513420292217199"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3998556285729111"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8254049598081756"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7864851338199599"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.36250582655981134"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.34141096611852473"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6623376170853954"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8115755548557642"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5250847191316548"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.13667087784484622"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.27617345850047004"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
