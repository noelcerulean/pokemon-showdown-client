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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.2360173324078223" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7828894761481062" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.00920307187251801" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.32722039239253387" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.2654781427297488" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.34275105947079654" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.26424960416123744"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6354372160119319" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0430846112107639">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8622978278805">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7839431907212948">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.38385885501989514">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1629694119548808"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.04604199538427589"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4460639135215423"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7213843769073893"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.26186651437513797"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8354954935029968"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.808424037004533"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9920101048841914"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9033572470121769"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.17021956348204537"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.14432357630707648"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7552146679742688"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.28755231771113143"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8317108583359814"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.10428470734801731"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.47579535449899835"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9691924580312228"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3553669281106211"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.08695098229434373"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
