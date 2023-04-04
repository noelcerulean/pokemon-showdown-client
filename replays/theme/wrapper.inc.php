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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.48416788788923304" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8900320877200785" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6327213318163838" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7146422810943149" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.16819146090414194" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.22677620125270548" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8036879136905952"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.03538894594971165" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6187909072472497">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1073756870366207">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.009614292247946965">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5862715910753133">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5108332739441874"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5021887516475538"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.24787154665326105"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7724948498536457"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.07565926476786577"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.005216102948706336"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.09335887708203527"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8607856980232882"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.25687486420933237"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6473771595123179"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8826106812534495"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3729771502312951"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7099906258663784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9107979552662138"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.27477110677264993"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.21304173486141065"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.37105467083854093"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.31155468882695225"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4257157434562968"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
