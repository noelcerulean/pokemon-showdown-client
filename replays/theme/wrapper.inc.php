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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7244363366506554" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.13805654610895468" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2321778094979603" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.19900991527164136" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.40976433520703703" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.290602810886182" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7292038910957821"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.14867899882349134" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.36682745874510125">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.29104354297736035">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7559346961449471">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8416246606244098">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8743446809919517"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.2535950282074697"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7898132005064591"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.256585931153388"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.20495578642488677"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.43980026492246793"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.23109120120685045"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.11805252243106801"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.07220485407092303"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7666507698732761"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7888928799870094"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5088529065032101"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6238192115023753"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.048144467941812374"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.018621753503817562"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5228158893297656"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9803387503563699"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5784562729344569"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.300849692849654"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
