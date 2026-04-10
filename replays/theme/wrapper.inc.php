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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7850761430698505" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.09254269062726617" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.625859319905657" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7079349768824956" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3359697177101908" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3678548024380208" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9969785171858239"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.40006754150229296" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.03239161572439242">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3331712761037393">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9601379226875264">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.39523753788528504">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.35102245641066876"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5002970382951946"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.1279162137955001"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8735815878302458"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3314367140508372"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7897638386779171"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7117457579593689"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8785235420798172"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3180117643114513"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6241196609512778"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.05831655872092245"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6634212997708546"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.038070640771388"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6813796823947982"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8706020680539015"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7546805969971606"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.963243474009527"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5279579984744076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.1831425872461021"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
