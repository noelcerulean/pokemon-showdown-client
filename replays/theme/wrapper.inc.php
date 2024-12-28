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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7066335622468887" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.089533317518254" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8772038531578206" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6892707674119176" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8807463280915981" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.31510675030294033" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.523587968134549"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.34105664581167683" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.25777489726034">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.21436359003285443">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.20643833454981841">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8733495313981081">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.17573473216628432"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7366664782047327"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6007549807573234"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9216686257556403"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9647465370380077"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5896233972059208"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.23063353961847022"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2567264941822496"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6664374843995198"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6578182295302586"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.48741751826678503"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7539850574192009"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6052103225029006"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.48052562815733735"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.05207025107054064"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8368619235323957"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.41045161452321444"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.180586286393851"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5694671677793397"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
