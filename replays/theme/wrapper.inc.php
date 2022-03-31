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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9654582377040006" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5608393409593533" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3455745134501853" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.17341220169406713" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4566040043556945" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.42548754272196554" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.826435899175535"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9420656330601453" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6491653344525714">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4635416426135952">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8665654721304252">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.21125180898771778">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.43629688231697905"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6320708954789824"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9194747382363717"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.545409292539285"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.29043557245415563"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.04924151923747444"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3794014639620178"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6154037640377292"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.17419002216164237"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2801223949844538"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.22263912291870303"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.19636098158014526"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8683408298270958"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.06532013263407754"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.992922805604531"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.15529248550894748"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9604720082427132"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6650664174847098"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7217260484532246"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
