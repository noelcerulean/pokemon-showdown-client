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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7377072894027059" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9977587620012289" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6928079067375192" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.22583227972568287" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.040095270975287534" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.926875933459425" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4807422887925854"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.27445087585591965" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6571179132069676">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.05703054409868247">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.035109124317094675">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.652575806442335">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8284546713804362"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6067184099437373"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2732456972429893"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4620846104404124"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7074909837219503"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4912594252205098"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7355417555975159"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6493676191672626"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5676315478645089"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4332459389799437"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.653208535400458"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.07018886140958669"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3589099557986495"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.19103854659195108"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.36305561287622923"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.1530324570990449"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.48026168401389024"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.67840134373699"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3427972200302021"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
