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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8170327799777997" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3567057137281817" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9098724585878435" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.555479435977372" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.2813495615704771" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9248945913002975" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9909750639703452"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.11685479275061872" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.953929910636423">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5249668880037193">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6264199996618085">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.20929933510616938">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.12907608820160021"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5942942559416058"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.20119804640377348"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9226998424060706"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.11353203777930765"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3243835727568356"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9612774513893971"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3653969730194109"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5864569236268773"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.049268219249142486"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9490280637056718"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6437341396902729"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5118751326560227"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.36294382585046603"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6206623618491578"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.09018133073578105"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.1073489871611808"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.17008342216961791"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7670334524845752"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
