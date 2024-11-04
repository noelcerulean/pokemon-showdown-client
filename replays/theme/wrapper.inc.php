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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3806177890243736" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.03221256000888628" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.03114622026300884" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6247585491329135" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.19533665945487066" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.47985790257752936" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3699762925398504"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7689483020092949" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3318582543214137">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.32277545451554945">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5921525441854953">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8745367652006746">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7689524351969652"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.36810139054497903"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.17890902942829423"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5631162989289309"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4192821787197958"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7805507465602779"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4571143209488473"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7102429899486586"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.842544328144085"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.05984585601390768"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6461039173983527"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7484796148075306"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9721824983638658"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.06318167937593522"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9554890526174318"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5060418123571553"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.832165315794392"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.4994790756005305"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4859581993414521"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
