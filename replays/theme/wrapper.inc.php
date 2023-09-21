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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7282678576729384" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5160982497827973" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6130172771489459" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5153955942974731" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7072566347497864" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3094363779693037" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5746356738433354"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2749696496328875" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3139715814597839">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.21763004441624934">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.983791900826088">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8518834218743716">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6461933276736771"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.2439409797283374"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2054115159181955"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.04033696684326049"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2635171998765369"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7064471235494914"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.13392339176219048"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.666503457379416"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5135496908925425"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5723918356822522"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8779343297937767"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6882660102455846"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.18197065517590816"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9326375054197964"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.18894600125048489"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.19498728935530774"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6494447775011141"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5812838093404722"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.32394365983946405"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
