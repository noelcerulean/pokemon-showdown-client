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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6065210907002658" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7624959729522691" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.14580243693031059" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.10260653316386192" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9367079515271624" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.27413138171959694" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6514252494725115"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5824926448712786" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3530338302908256">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9737569346145134">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6799819531066975">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.06375256508422544">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.15667219010844202"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.20196974835911585"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2641768865559322"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9660182629478675"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6072997076449103"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.407158019022428"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.1455760998805733"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6010376013041758"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5628384559232713"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.011385803637701919"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.358086441337524"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5132777514657256"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3539118181583758"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2779618049229482"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.47061305017882815"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.06275965984151877"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9921113949097526"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.20557544813145534"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.26218611480238363"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
