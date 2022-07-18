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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.03272520896203801" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9824763385189805" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5199386435451137" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.23446312668393943" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.30588960243391483" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.30734649156052374" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8609298302424142"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9429653155052784" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4379811720506799">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2522120186642052">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.1401542515636811">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6257488444697654">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9198720942600338"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.04156997888979874"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.026114213964230526"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6574160625592782"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9617164548551174"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2453288290172837"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.540264160693301"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.08722622824860604"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8572731350663734"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9447409198489329"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7982299211218185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.2679459420510688"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6439984050184724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5809546061719735"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.09585883139204254"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.20994826850831183"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.455587428798772"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8118946025028342"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.008617248993369575"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
