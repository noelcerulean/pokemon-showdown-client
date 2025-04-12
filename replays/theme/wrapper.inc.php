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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.26692543796274726" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.09423543685393843" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.18403523570698055" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5843754571879203" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9117390307995406" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9559339919473095" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.010229244482170996"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5349845284703232" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.78466859578216">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09686891401533826">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9213276188532142">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.531531391203881">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7353414147823185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3983871125702607"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.04105172457973261"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.23525468412752626"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.022551083700876884"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.31398146302175367"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.10885850269359953"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.24517839657181262"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.17708099275313938"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5920372624512154"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9204579971148017"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.24035528379898352"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9116891917089109"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.021063902196154505"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6800972531103422"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.01750012441355797"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8211515510166698"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.24281369540674835"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3718914627893657"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
