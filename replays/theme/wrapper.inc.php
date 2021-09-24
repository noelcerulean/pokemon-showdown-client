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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4118546126011893" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2854699000856349" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.40786663073618956" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9834470575410965" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6604824339737314" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6906641582486035" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5550695172336784"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5703812450279526" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9731933945999285">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7052508442081269">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.12228671596388208">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5642230788758307">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5748051535791441"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9619228789052852"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8335829600755333"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.08444025680514677"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2617796081973185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6807649102278059"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.36552795061684473"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2998792822786247"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.09847176465453833"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8754907501016971"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5732940937564386"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7240020985396247"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.08937707425896835"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.33663952052131485"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.32672978351885607"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.014443638836432848"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.25530112595383514"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.540548417965957"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2380138597583814"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
