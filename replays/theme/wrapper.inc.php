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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8344895383407711" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.23412004491881833" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5717537980823584" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.563747671375828" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8497409650720875" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5142237890928849" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5351660042874378"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8512139112238719" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.42879536616263336">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5487669968698272">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4221598569650802">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.35031935282974436">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9185181700599336"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7806267092782473"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.07194307381346743"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5759170385187868"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.40397821666338696"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4940308977327581"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9366072373643677"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.23650868852234375"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5454664644447693"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3068276614148975"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8996985123907812"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.397748327370923"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5843348605972676"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6762472825846475"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2656149247035844"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.10892760241954669"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9651370863701791"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3828631113041461"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3253918617788496"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
