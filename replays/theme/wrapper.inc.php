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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.49494072089182795" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.18249078091775628" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5688419051519973" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.022557703279975305" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.19946964424516667" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9083094440007562" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9682548252338232"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5717690647688969" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.19063059487576361">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9661668938437653">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8585975302102311">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3163221461614971">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9637801039743841"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6111185821685112"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.1687029907337012"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4084788410983782"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.1001112880235997"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.20704165296481203"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.47895006380739447"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3107264042322835"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.49637619127523624"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.22562301594587675"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.46893969125200097"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5424819938747945"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5693508848434339"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9755710226598575"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2687180250459231"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6736660082834693"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2444000049424604"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.15820535756565945"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.896798128037277"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
