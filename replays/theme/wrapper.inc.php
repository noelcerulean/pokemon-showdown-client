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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.16556191685496024" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.09101564789591476" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3140960248530249" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8055263203906362" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8964236356008124" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.940110428204177" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8405806733778012"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8450030087430362" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5670460007599782">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5988858715486598">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.28748241154436016">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.1055657620578696">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.08218041415925947"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.14069308808379533"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.679132057743469"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4860525083245495"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4077732236288325"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2959578483384051"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.10486259752429183"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9571591187630804"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7585132336202824"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.26942544610305896"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9939779604936319"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.24719649821848844"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9728635811205002"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7624416376544361"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3026450236080769"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4571332909757484"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9622411495838081"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.09298748737915341"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.21487389067421114"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
