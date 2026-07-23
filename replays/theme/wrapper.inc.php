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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3503039810351416" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.40321626250794673" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.119914189050226" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.01786297424594463" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4719337685686711" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6822261600253627" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4089219266780406"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.12072859372931388" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.18064824886419717">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2688603941405143">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.524726262663072">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.1137246934760292">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7032629471509437"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.28031253015591484"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3201915781027025"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.13198855143963306"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8190363206057787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.025116319782915397"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5163835678022644"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9887533780438582"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.578447333177601"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.11473839931685892"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.621828924155208"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3826722966511942"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5147470817917708"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.028597938542544776"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5828902803701321"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.36741182785140847"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.11849306029595819"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7899280238846489"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.08091482560036822"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
