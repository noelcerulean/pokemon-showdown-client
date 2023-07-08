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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9449156491315593" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6072439222933175" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.06601887683611163" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.23450728859850845" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.054567948489503415" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4737590890015273" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5037336294862589"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.15814635984283232" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8356494295396926">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.226137014319151">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9893026432464846">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3276385773325565">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5863836075868976"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.19592022516475827"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5907660960343712"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8877396911140896"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.06178015269405601"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.15347216085455972"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9107865997074969"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9023466302913568"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.10828877499745326"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2899293557280862"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2151633978733496"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7278904651666713"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4680730079127373"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.30836934012321837"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.36639945438705523"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7845367025192753"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7287669403213897"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.04728907270332239"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.051743952419361694"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
