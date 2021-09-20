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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.47744627479398183" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8885399291924181" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.26007781729737345" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.39881238713120504" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6371323501660797" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6726648105253259" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6215282158021243"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.12167265081792844" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9460923010680311">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9391057628665762">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.005142213331337908">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3069083391052334">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8771414380989584"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6877126833723761"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3918944843221466"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6167307243389994"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5966926074789196"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.21933117370074195"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.24043984591101242"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2939700255719586"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9920883826950142"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.682649623825262"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5467433746904868"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.60461780428402"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7588267119083114"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.16844230312091413"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9168682116631706"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8160317024739652"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.14612187408913968"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6837125246110558"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5846500544650131"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
