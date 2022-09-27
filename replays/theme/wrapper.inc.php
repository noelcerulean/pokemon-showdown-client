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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.35221462171398454" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9693760037413051" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6362912658952908" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.36972463336964156" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3182986589267882" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.15945424467596236" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6817694712184901"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.30328319034421325" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.16918442044036053">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.713316180029415">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.33676288085201644">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9484218444672643">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5353749012353408"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9192256408713362"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9900749470866068"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7614118851710898"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.36343924821298157"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5491265149075322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.20072351534896726"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.21699923671996402"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8950301268185783"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7227745557508698"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8860490019201586"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.19448404484548587"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6175039173276295"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.293534385492068"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3887390749107502"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7980306022415755"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4318290656734898"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.17798990725540986"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4534688252211896"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
