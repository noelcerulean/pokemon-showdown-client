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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.40550941809009355" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.16686580426770292" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4011922086582327" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.28035498213695553" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.14417636655252064" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6280727106578183" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.336266734732249"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3954112026351344" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6849782003384504">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4687217164852233">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.14912033012716064">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5230008159739141">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.08897551383522972"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5613900556117202"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5552582849441015"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.10431219411497339"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.695719021626602"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5765950955491834"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.35955446844089156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.18093155406244366"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6097507394204325"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9863114721222921"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9536401723881083"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8295337986264435"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.002316728660537448"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7363715657433352"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2248919631962829"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7350346116493622"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.993248639621864"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6567431587295711"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7112657876868125"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
