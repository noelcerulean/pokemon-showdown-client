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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.12789961964358065" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3428238886725343" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2818906602125124" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2944351828385219" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6120427399422563" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9823683708434177" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8321087001087037"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.28831510604958743" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.10175675469306222">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3195011625234807">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.832627251222716">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4450360485361142">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5951589628073948"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6267319069015966"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2714256631769285"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8105392653712091"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5549361724764563"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4242427563090172"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5551238565668215"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4127182416271107"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.07367479307747171"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.45102966206682504"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.18579713172699752"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6764542990331184"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.20046814620921372"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.1503528021279461"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3749590268439398"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7548294927626689"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4604791305617608"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5374321030831812"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.23400923964193665"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
