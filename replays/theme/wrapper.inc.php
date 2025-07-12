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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.24571260215256796" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3023253498558125" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.38872826844771513" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6698698427535699" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6413336306890303" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3615613374234452" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9544559777541375"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9936168596714925" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9452086668236637">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7993122056270976">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.2810991381130208">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4979820195919673">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.47558668316506036"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5178350816338988"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5322938510595199"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9505190847004197"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6397237595329917"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.797190023828684"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8961928536820682"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6419095458340656"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.372362270216005"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2778784912743204"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.09342838060326697"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5094738987485146"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9510409119269352"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6213710224430429"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.04251139169981699"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5942528312163229"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.21911831705546625"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.1689662390742248"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9465699051708194"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
