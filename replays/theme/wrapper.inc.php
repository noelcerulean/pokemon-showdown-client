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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9068544319346619" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8665140282621626" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7326348491363779" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5170583585349167" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.1430992015850956" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.48470567023140787" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9649500472902912"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3604922105335999" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.39264080663917045">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3920593692804526">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8902274236314338">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6577825769195638">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.24255555383884508"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.21769328498085905"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9083146905284898"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.17564486888762154"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8332212051570749"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4109605031812438"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8305881511632545"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8896050891647724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.0895362058500353"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.39095003216749147"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.19416836057581932"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3178435587293609"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.09674471252813599"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6223109768863082"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7296451615434503"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.11293103984801633"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9433689525539655"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.07588958647947419"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.16250739035555517"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
