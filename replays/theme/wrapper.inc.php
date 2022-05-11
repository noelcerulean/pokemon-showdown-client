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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5491266231733778" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5738245210799244" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.932132594675898" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7875225198753915" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9495045934627806" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8566086151459336" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.46563093337234407"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7142883663235111" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8541817792061321">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7578410722523707">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.04393173176031806">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.056427094759146756">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6874368985713939"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.936483300387086"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.05753973824232106"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6313001218279624"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.007877549684245144"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.07031294032816104"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2777699637802198"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.753799389064145"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.684288163114275"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2749781802734994"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7081584166750192"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8158313203440248"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5483957426333164"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.15904241244212614"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.10640045996470437"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9881670248916363"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.16392526691742138"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8724632311316938"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5861195775893588"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
