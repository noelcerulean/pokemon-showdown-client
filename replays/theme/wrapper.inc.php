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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6520350542541213" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5247038982008905" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.07491912859549843" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7452906573672362" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6181258204661655" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1592803039541797" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.794049679180574"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9760723236829503" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.12886477373177452">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.37873026441721414">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8498396396281043">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.020772425534997918">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9973019527114984"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.02252256863367519"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3556619442678348"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8033842534679885"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.49472891166983013"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.18213899325367544"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5478584600032217"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.900461467165196"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.39277244279286405"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.22725852958277648"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5514399798305871"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9252922962643435"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8289810073564945"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5225445912847908"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4266153857095154"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9920388558055555"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8609531282705558"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7243334767351077"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8333330975727078"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
