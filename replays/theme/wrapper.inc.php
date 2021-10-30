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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6064077994607828" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7902936116922255" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.47975494513995054" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4725026825692653" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.07043147838540809" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5151924980194813" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5909149677647119"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5875484360368166" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.49453204856764366">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.07769930133571568">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8276366883118753">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.49777600138209155">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.43612381959310476"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.461639452212639"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.41198390023059117"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.44454830073689244"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.15322712041191267"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3949743751021493"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7862854653190965"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8075165017184791"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5647618283535336"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.987028555247133"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.42172706490899436"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3387778708161553"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6225870410810932"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.15792535325152657"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.20810371743940004"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6856690284977078"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.15100142192024402"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5441424857939303"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.25928734965437483"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
