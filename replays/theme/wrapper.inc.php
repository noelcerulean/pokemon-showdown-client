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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.782455583845602" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.1154242427260408" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8379532114031729" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.14135348012441606" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5273318832421865" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.30681573429988607" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.03693434642743365"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5740573206179962" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.013445567777203626">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.32732817638281975">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3567050750930527">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.03531038834057498">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6026824452316124"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9439096911358349"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9421512609652869"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5248687894946793"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.019907647026338404"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7416172319199617"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6084784432449095"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3465118998038712"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3213443240160827"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.31819204777197285"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8273260374502749"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9667572331446519"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8277174194001784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5864425537750158"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.07932237607391035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5838849652034017"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2205534843987298"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.22938544662266458"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8002846008462445"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
