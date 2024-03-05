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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8835415335278713" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.013113864578105705" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9720071673540327" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8037722363558366" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5294856664790437" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.21177869872075616" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.09906728980307444"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6068386678571858" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4895033833270821">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.24561904040683813">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8059772913772072">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8089894352850899">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2409138963009918"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.16208706600371325"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.307060641370392"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7680310772131209"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.30710169886944017"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8576338670940904"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6802770175076764"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3814220521882987"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.12222287840968793"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9497551386266982"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3300168179290903"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7097028582204099"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.053521624022396574"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9040794816921596"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6524163846750115"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.28080428000231605"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7256253180765686"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.16713855644359055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.020000885279939373"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
