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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8832142707174679" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3130259249002074" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8123471130629758" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9957557177369438" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7040134096278301" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9429050365906588" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.20514112052480038"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8628937122428038" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.46625204349133686">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7331596687633841">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5971979294217953">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5878923785960553">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.686015800571735"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6704097476345201"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.22278168659517084"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5198584904482728"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9729103171515798"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.05916314717747517"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6868049324984877"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9294886947710281"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7339669437022489"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.805519651681802"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.10709505468803648"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3603902501617875"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.19404440676745072"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.32829871489452556"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5255154237085662"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6418260889141736"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6161201891891828"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.06835379104271833"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.14817507991963974"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
