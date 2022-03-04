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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.15651294666053572" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.1801862612892018" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.21924152880388603" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.06190336954106046" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3523701940651265" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.33617282094802214" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5930437575629233"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.93285455511288" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9729998707925975">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1389965062485805">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5281110246176481">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.452009062780242">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.228046513580344"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.007874166512367609"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.30624037515477065"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9883103004541398"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7664810974899929"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8608325595967365"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.761572820400009"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.13791981241834161"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7365278439642653"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.991354153510754"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.30440056913612756"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8759109154920741"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6909889118732075"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.46155669119554377"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8871436295294846"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.2948793015933908"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.878457103164985"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6686104539366997"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.07995574164534869"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
