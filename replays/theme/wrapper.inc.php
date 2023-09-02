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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.19786116632980733" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2059583296901617" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3624313300659261" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.0351422282670002" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7400083436047973" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5377981942788601" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2939046024717207"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5266502221395322" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3366603384508946">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.13381730892503318">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9121360322151575">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8168041831124184">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.30109768619703625"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.1980342486580864"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5609970019352455"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3841100779727049"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4795435178300347"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.10457086671420335"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.20802346862776844"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.48130718837418685"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.03405455069173269"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6901676371632304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6046919984880461"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8378605824506817"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7842378040967819"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3590654457629019"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.038135600704558126"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.15859395018425704"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.09325912153344285"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6061397364495522"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2476194741167752"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
