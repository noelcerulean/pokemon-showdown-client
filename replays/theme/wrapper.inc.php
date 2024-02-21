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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7975664812754872" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7142238576134894" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.13391665774258255" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7152354882689831" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.24268110629398" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7169206434367508" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5240397525767106"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.415720147902662" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5039822372188374">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6445200813894401">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6017474829999678">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.18181145958162825">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.26955901902447676"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6915203158526966"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8728815519497755"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8493336099773607"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3584294756197772"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.29475054603859263"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.07003641191691212"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7312664844453642"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8135905836798147"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.44372643293721503"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.26827894404922836"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.45527783116438014"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3968270224115138"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5637657052313452"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6577066618984575"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.01405337247088223"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8633515195737811"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9497374509156467"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.16918707146154732"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
