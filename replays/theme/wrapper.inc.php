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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.13110488986149615" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6121280480397353" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.10041578326670142" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9649732643893807" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4705863701029491" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5201560307042461" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7930867925013689"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3471479522738252" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.382672184233402">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.42242769387003354">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.030052785942598748">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9281966118356626">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14769015455511902"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4047333820739276"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.12798790753083145"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6173784552737198"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.1994527046342196"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2341395127351762"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7663275957198425"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8721792849714884"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.44688956861222473"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.16754895810360226"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3546912680868073"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.33401824797955193"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7309683209451703"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.48022539369957995"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.42728122169977145"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.16310551684548957"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6251687876213672"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3894820113183972"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.0685053850609767"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
