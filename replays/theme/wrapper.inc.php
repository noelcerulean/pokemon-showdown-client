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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4704315273996893" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5455656697807909" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7161578259299759" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2225315589674164" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9719448645790698" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8952790671461806" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.13012197459420394"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7647618091316561" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8603627974081254">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.38659328102968593">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7232279812785534">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7699121380176523">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8385935624021477"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6702619456348766"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.542683478366907"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6318350437884774"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3182374807850834"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.10653530597197625"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.506953572844336"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6180492661558727"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.015309227667888115"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7267921156534851"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2482784420339188"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.612173092185939"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.36377918631613304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4235963439121966"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8037563546432687"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8633620127642181"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.1320898761462046"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.22681865411386637"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5029448992584036"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
