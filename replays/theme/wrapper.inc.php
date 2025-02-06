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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.1447352016421659" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.956257259189474" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5069758072665516" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5706374529129146" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4185550776201432" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9758586887669176" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.03422040967676665"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.764894270693161" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8531900725656156">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9507992169186072">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7956141096664207">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8149024137958603">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.430106336795371"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.535257007695279"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.254090744102629"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8172519324535088"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7250634625796764"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.013020565732935419"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6376403691040893"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.23907036956155814"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8679743112225999"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8799662600598455"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5151706620032319"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.08456164179850756"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9910904671992027"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.04356978984078652"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6599786721260363"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5262153322790009"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7894940247606443"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.11230842043428346"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6711773262619898"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
