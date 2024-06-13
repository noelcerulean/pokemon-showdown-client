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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.11158101518654706" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.29348639117395137" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7091061930235463" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8475465953210373" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8626833789308845" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5526875897138275" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7839362142042154"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7623450192146348" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.04003548699030368">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7419585533904567">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8398229336339957">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9078987256550917">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9625470382084922"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6770603299786073"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.06325236477240859"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7539002288201127"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.12151835106021469"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5449761545308449"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.17672678532449138"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.39098355297998233"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3327546250179996"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.05653372372206378"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.08798090267067549"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.1277028584376787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.05986228278187533"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3244174108532649"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.06254807690344077"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.029333265753631155"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4153972258031271"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8350861929886402"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5679534892450715"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
