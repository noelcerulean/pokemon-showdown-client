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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.957973583700138" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5245128015099598" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5312336629820986" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.02713466030190781" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5709765046620223" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.572556856224" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6041119816355218"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.861293295532396" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8910437388148047">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.652695491651399">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.2763584878761367">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9932884126323371">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9866453727661264"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.03206480057551131"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.537725268414833"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8062467947516623"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9117186882798116"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.42680290819170996"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.19040521448680647"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3371155316445644"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.720790728211566"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.1441329466999508"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5657030403126273"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.08755703380750601"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4984897343211965"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7979182776531182"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.32929347808670184"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5844026867196883"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6648908163803198"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5856172639291684"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9128767058411844"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
