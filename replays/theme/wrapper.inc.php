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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3101086355531022" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9725988079030492" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7057288900060015" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7144929146156593" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.2954942332110335" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5667248276733761" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.031946637952675605"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.742655891531695" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7862471935590074">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.03664559043032378">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9320668199751074">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5402853999587742">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5937961324980081"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.700589970239814"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.059439676082074566"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8996864977510308"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8074824995454877"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.03230203717624369"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6119363728582936"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9886478679170696"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4154973085421898"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.40884947773178126"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9501309328763157"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9114585457219351"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7647995770229679"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.07563593692664727"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.20691584256747042"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3852769457828267"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7615082956253001"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7086278299016553"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.1517595431125347"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
