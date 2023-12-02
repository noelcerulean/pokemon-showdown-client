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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6808909509826695" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.32263828454382737" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2722026973385687" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.49589412369390184" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.2997358403637873" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.49572590583997256" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5153636567745119"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7006566889312591" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6393352239893109">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8575918429968288">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6277892406045362">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5271747101964934">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8490018840422855"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5524819878694291"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.18671828321331363"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5541315299786924"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.22031135598324658"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.44814846246346596"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3918218829528368"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6521280631541075"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.488483756639718"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.796147711656231"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8043580629002984"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9164551406410064"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.11125686534412327"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8418643630058014"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.008304809160324611"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4264162446158397"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6642725193017536"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.42737813773528943"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5647696666159863"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
