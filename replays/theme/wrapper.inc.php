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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4560738823030026" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.14175252285737372" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8462238945843401" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6280790996432966" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9374674072424412" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7151526176022411" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6375721673796408"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.32909420137797496" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9826147614598353">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7364513963609862">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.364004147318977">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.1705673681813753">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.672246915574372"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9816197738859895"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6097674124369894"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4991754408021962"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.43483228073656677"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.13730480696310887"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8938425372575132"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2780793312793146"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8350949837666899"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5180143222171589"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.548120839997551"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.43598597092557934"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5202681305769961"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.86549785325358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3670176292471068"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5082292568377671"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3226859036156693"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8523168613642393"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.48009323436028617"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
