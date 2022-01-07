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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7844684907427892" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7645903713209268" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4721510949025143" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8149604107087947" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9298885196669935" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7579070314136287" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7237779597099376"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9943979409860213" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.21765523421570565">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5080796830470424">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9749840852766034">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.04192262198603958">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6358759784693808"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9772786285558293"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.07868221996343161"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5529679523412196"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6894772244451344"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.14304305313405075"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6853045501915749"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5325280445356497"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.41797820298837496"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.45196563792552547"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9810267554421885"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8123555515891787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.26908164480218444"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7492596157157976"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9300932983007264"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5551656334621324"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4147902774462837"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.4652496069503267"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.40875774136200493"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
