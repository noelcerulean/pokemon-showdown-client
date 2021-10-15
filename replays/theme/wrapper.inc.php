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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6480177176285724" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.704631470854711" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.19711472277563713" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.18724306392650503" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8069871454782631" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8258499140266202" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8262791403019105"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7232474953841488" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.274245878953421">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.776754406185054">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5370788618817703">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9381048379016541">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3928667445642713"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.77458278229106"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9983079867827873"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.28430145285884234"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4770874741750111"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.970007156356413"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9555658655876007"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.666682320832723"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9626528808221604"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.612396925742358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5917055596589074"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.214088706973669"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3092316308122529"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.29145898831935657"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9300898218909639"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4153613815180841"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7647054528583579"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.895642793210182"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5922530522049245"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
