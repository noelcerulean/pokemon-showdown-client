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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.09453657521153991" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.053662250958765645" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6753573088999336" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.40042516954948804" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.26362568564019817" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.020308033003404002" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.23644035811850372"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7518457145440292" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6948384405682178">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.27210953281766503">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.90642012481711">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4710857669026258">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.010879465543459865"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4376448441047365"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5277277183933053"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.571790861636704"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3667896132031754"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8477070436460794"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8673094934220293"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.18114687938041718"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.32388587421528925"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4351180884229071"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2645508638530405"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.051577464645141013"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7601452526095249"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.1396740583823357"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3697991072878828"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5585794391040215"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.1888488382321989"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.06587179679590438"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.1927001559238375"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
