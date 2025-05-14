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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.027336446382563162" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.20249139523940674" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3400702933563393" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.509697544685157" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7996221900706475" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4049780561526928" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.1335737151841334"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.42777444800553477" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5197685708934121">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8282916827733249">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.1497859318571364">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.09639452909962909">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9633353689717681"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.802410976660803"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4411936155627709"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4833216397718696"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.733791671957361"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5581478246050751"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4069120125213599"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5716592616255816"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5663400192442338"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.007239104935303553"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4403745986600107"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7503286234345838"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.1256505923867186"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5267518045846955"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6151609698007743"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.02920378598343687"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.26321313967392945"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2797112481257753"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9632130798125063"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
