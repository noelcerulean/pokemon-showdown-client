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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.49269492496398404" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5036061358100155" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9227975695123165" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.25583412390242266" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5196657368408679" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8536462928140776" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.716995824152763"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.22174469649676998" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2263219015316602">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3832884296630934">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9054860752708664">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.26784107147914615">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8947542041170904"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.08167108402917167"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5189554045150826"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7665686998802177"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6633256567439489"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6533355464682999"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7355835078060287"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7338511500609719"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.043629294599340396"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2823507752011296"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6712506901028348"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.317063534029022"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.43768162045964787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5204915572504354"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.03785717325163129"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.17656023881253935"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8535474529490659"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.43811959382213916"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.14362461046822705"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
