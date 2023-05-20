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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.04051237437618882" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5329079254026095" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4450491610284597" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9121878221763087" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7161196690145428" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8228207288538281" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.31600740043008013"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2765915117039397" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6727307709287627">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.933292629245611">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7411741015564943">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.1314375935837444">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.09252912351759357"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6160068119508937"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.12964161260804175"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2631368636468756"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4644446468614065"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7662160329629653"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7497125925402806"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5632173921416088"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7069150932263513"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8056892056899261"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.25425949491703626"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.542204621064514"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3428198826034399"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7679832100766757"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2998330442207273"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8884404204650833"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6334716144964045"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7453784940496013"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4776667834712318"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
