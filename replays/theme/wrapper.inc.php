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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8884861682781933" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.25053460822010387" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3755264000264116" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6918309410588357" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.41975387665524533" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7303433868083695" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.792194379170023"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.48756778841845083" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8274516341334386">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5880871087107882">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.49393275155577676">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7551771596440502">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3597144946530353"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8689956977973141"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6493348052503054"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.016221104385083285"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.611935644749563"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.28997729100864866"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4734072311211992"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5996572573385364"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7339952417341404"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.02938773011893181"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.12424238197297321"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3252041689324139"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5029642341190204"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6896791919360663"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.0758210584272736"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.2833839559104563"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.37392056191257317"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.42039888942567427"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.05485787716532209"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
