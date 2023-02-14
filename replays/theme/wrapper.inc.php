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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.1394714518985578" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5707466162431589" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.18241412895983533" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6723276454489877" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4950903635788648" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.41251453534906" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7003478577485416"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.23038159318337192" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7232893931696667">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7773224437513371">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.005495368852278526">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.26587516233616326">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9292600940018332"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9867430130998132"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6867770844407488"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6379226371743962"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6526589000329441"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.36561970122238563"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8547518404022791"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.22022446950840968"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7157041232743975"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.46930777630048026"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4510700387870348"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.14625420336450268"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6769247032998311"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.49690198481896486"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9217325716906208"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5751055516157761"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.04435866493371665"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2737088047151941"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9713884246996152"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
