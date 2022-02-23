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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5589754768022457" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.41203108843148195" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.17682835979069345" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.07510451554196407" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4233220005996303" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.04779260761419302" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5817797130680844"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.02032931051440179" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.400957461211219">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9281501239354817">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8825746079932593">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.14490105651826157">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.19894921315133063"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.00725866396867314"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7446888152445954"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2080736803988521"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.14787753589317743"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5745561735403231"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.1149932945795078"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.16731305639301408"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3377404668481674"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.34856118522361257"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.23015394324874672"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8425576334738782"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.04500077984966078"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9690584112552822"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5861863370540357"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9148090501342001"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4029570943833949"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7413058508511894"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.17281615306963882"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
