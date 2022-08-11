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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3248391980288259" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5352045979901523" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5576699175446425" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9056525081842575" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.42081320408395473" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1738736186525831" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.36822344059208145"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5714195820213188" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2087607353357166">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7044138998861733">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.08351249446511311">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5408468447891135">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9817305078160821"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9534142637649923"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.10914004812520117"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1230952666977827"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.07670212901112339"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9794657186715638"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8160017998771494"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9727059394798028"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6772521159260667"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4151311210098838"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7836718632474264"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.02087076360323037"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4889429439250166"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.007867989361407757"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4858543888116458"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.21104422602655348"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7930980331408837"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9720839289157592"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7140535736073859"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
