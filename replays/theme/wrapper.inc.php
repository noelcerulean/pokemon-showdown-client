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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9233440823659858" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6399383392326303" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6580722219186199" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.22486224128263577" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.43741238029531826" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4188031243908681" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4159946957121088"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8641018702142675" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.11552794782620612">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3932702113156803">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8656057886074522">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.09613402265209392">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5587699758171147"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3353298615253928"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4000016137530129"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5321341434160181"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6612501475478292"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9671869086594054"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.09648636282739864"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6758795092698349"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5431226784119794"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3039391542597587"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8452797078657701"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8147690618612451"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8877613449961015"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.15967167689951167"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.848318227827648"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9562464975892253"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.1750955587285068"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3683442502881533"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9886186791390748"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
