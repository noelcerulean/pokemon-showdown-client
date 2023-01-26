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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.03644453458857089" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.12764604063894014" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5288992741204857" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8591034990513386" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.22568933912621314" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.12926504167081032" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9342861138213063"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.265206641456063" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9707273637323663">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.0175213511558443">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7746371304150574">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.0355689279562319">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.087093573584198"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.958086003589133"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6261415794806264"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5319884853661296"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.10041572982749791"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.641778017305835"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.11065383333489076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8215874928492748"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.18184159721759396"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6039411305777784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4093754127866347"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9243999863723678"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8896077162730709"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.65942569439396"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5001814120451906"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.05936493347942107"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.409832108685688"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.15290358708586593"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7470292974960078"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
