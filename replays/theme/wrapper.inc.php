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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.954824484326771" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6912282210632474" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9799053362803865" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.1460629027770013" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9601713616627174" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7206472646604722" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.38207139656665956"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.019671185281367354" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5545593393943471">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2358337289796235">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5763503472042695">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.23549217899070918">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7954782715071662"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.24339017720907719"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9223270537176913"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.84792841005184"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.15180588691268815"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8643858593514835"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.08774685016085648"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5955318600360089"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9477922304660114"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7854141759573159"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.648280575070767"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5221482409668279"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.05296745049668572"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5273176500828178"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7328051556402764"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5725411996050249"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9413863243347873"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5479212916254583"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.33761419860818087"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
