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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.2540647055851297" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9589662274633408" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6160972313018338" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.1897056514116795" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4915367145969174" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8788532827628965" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6051358020699691"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8198321666387838" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9837615121455594">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.15408623836521707">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.16118561751297578">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7132318879723525">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9696352965827626"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7401536646480849"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.459690355198914"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.15456377681022215"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.03402201577178299"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6018195996077336"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9843659891527243"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6113011825686565"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.006355094783629056"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9725088352140507"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2066914801251658"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6690537218684198"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.1286866363943049"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.25826332423332543"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.38653612141235905"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5019804986229184"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6328952612545808"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8125338491636376"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6419286533820097"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
