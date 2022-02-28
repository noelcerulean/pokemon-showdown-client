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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.18694083354783642" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8330696320444231" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5996871456049047" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7114142155588634" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7519358321532013" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7754008401560688" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9740297792676957"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.20420659129073715" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5899068536685224">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.660532717757158">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8534353842954678">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.2655406224517962">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6900847149844165"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.22899017194228666"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.43794631686437757"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9492960840126605"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3078778748340103"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7446453587423183"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.45745927347971715"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8065636184902072"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6652129968529339"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2923164586043203"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7775242512971261"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.20163687982252787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5145214158737559"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.39838800850938605"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.15969369498397068"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3321445100484972"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7638907127123544"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6880794943654851"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6055408607629509"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
