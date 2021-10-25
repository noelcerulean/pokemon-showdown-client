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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7806954371067332" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2326921323595743" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.33367594011661095" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7051582161793108" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.10095977420674118" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6165836083336738" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9956008768056339"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.13279023905014964" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9037090802888599">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3405963860400385">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9229151439728567">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9704168155296358">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8861006456397857"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7277351175263596"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.09632232794521856"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5217462961831456"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2203580910874281"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.34509872162098687"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4554057217397416"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.10326721828225471"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.13693157488709762"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.966503835309807"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5136461663624035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7395508034416205"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.22502577663946988"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4255759605342755"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3629322096254226"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3010575161491227"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.39256780851497486"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.41568091652752215"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4573891735675597"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
