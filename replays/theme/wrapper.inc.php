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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.33474511480114155" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5392349694213219" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7193043714481577" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9278592912727373" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9654608529601834" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.743133025530631" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2803222010089761"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4662020870741559" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7693438476009697">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4400976612247871">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5884446068623539">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.11953699243890314">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9582176792613617"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.24605999382314847"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8945695379278422"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.04756269968168847"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.148174619653467"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4698292396596633"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.34757817039408656"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5223105722296684"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7027856626762847"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5090546254334354"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6370689359870199"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4403800154018027"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9066517631007416"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.09364754677505704"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3711120639387804"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7958876505855783"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.06699115298470648"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.533631959008587"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9688545920595968"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
