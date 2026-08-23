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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.20357919602625119" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.09886645685365747" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.13668359056316204" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6566961499336019" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.10783810237544778" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.05353423869070695" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7155569349444735"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.27661669081648643" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6205603401823974">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.12290355911617135">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6609659384098578">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9756108892660385">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.691017136012116"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8495307640935206"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.1403013814530747"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6129371404988164"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9229270607594724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.12158863970733225"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7385917075166426"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5195518914647239"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9873168192968182"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.42824710364259877"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7784735365622995"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7486543754568367"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7863682143552901"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.46023500115813953"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4760139907062404"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.793947312656855"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.35639928729607573"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8939592189382253"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.967416081720688"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
