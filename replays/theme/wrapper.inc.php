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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.735983615799624" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.00021650547718587987" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2941120821886869" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8226218939883068" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6639650092190861" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6837614571632384" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.31061521613281706"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6189040536965646" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9920329060436395">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6236577016199378">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.2692512453946767">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.25831420412064565">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7860713973472966"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5714792131169242"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.22843496550391462"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9474223082594357"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7310041728551426"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1415051732053061"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8882058246445244"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.12885485945315955"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.06457183654574772"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9123951019315077"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7923016789159956"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6471169623247681"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.1965258555475078"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4420549752180243"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8384890061607986"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8005741143125231"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.12639954409484178"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.47640318673107496"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2206542947439467"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
