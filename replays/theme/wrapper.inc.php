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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.37819775597473804" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7432312736168558" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.30878502949974984" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9815889643541318" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7372046750911865" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.27065408356734943" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.13783572368569197"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3655715266187285" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.19309786692935038">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5684362638239362">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5060554898361675">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9033129174319501">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.15322771740196317"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4503892302940926"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7262523088699744"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5864808990243622"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4406627859123524"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.14774868043323086"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6968321686110843"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.919891892377672"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8814657594667703"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8871108189923762"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6461718863966477"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5988930310761176"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5027823134091824"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.24933637967447697"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3208111437309591"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.517511476558359"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.07083210557432928"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5881371501778818"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7476765196004003"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
