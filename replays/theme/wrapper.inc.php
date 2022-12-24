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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8857475471312308" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.05199153782793431" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.32303246727177326" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7113933460220778" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.008148062381345467" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6699476388926664" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9359542457653702"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3619301434306741" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4349291158907571">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.37734297821841367">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6949653318865188">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9697720004226162">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9683280877356475"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.12723960690415903"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8627253825205123"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6803251888502542"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.18870011099493933"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4507536799714327"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3128969758692288"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7067408075426262"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.1018778080509195"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.016661365858247512"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.020536077715573864"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5829357599022187"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.06674367255760671"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.1388613766202087"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6971070174767251"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.04038496114494916"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.49121615564805876"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6636123501024884"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.10167012277326792"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
