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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7387591660554993" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2684534684161195" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8882901793123155" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3528332698855776" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.2652343487489097" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.0011274935619307591" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.10929588616534591"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.07622230434292931" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.30977741219254584">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9699061683008354">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.29260384940080186">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.19481045170062528">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7345581982430138"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.49901854359805253"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9701090138021147"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.35856853247579945"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9035607897051718"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7625836728768127"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8335879971591253"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7069977087147468"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.047623089360048665"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.676564822904409"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8318292451746081"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.32527889801143495"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8530555208383517"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6685286918661009"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.45873153403633515"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.1507708992928123"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8907179496922835"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6942714988933505"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8282087453272202"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
