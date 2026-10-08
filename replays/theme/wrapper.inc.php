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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.04969494324995316" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.655415262208467" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.39145300503801406" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.11417768838480424" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.08447234918135726" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.22148694847077843" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.37605980663243144"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.579785799889244" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5438247318702578">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.46127181186085564">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.1525757136455259">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.2638659563786785">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.39950037131724336"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4847771347619443"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4905183798644208"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.914844980338795"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8522514465961877"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8303065172232118"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8670538455861245"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7070992870680726"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.1632843321394548"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.10118061545610568"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.32582323405000113"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.46564081205683916"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6837795429476443"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.37114793399075774"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8657072994704316"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9056463713154903"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7948434284122101"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.1205443378880997"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.043890937517296225"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
