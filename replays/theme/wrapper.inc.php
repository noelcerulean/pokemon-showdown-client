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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8103885634090111" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8870943052188303" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.17585396832476752" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8679081276987253" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9030697438940056" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2258907560377046" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3945381324673616"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.49334062756717323" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8443143085734663">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.08879800924533487">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6150544080517124">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.2590915903507889">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.022176129064725103"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.724761127711333"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7137842227792417"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7320612316747996"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9150199778022485"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7740191926438136"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6062338013045241"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7755687961466708"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3872500949572866"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.010194498676744823"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7011264351967574"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.2610875308599234"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7131377790282019"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.35274501798919444"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5973171536843243"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.45805331687395534"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.37540966910013873"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.05831827023549563"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6946639861605768"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
