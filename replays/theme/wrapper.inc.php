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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3355481408734795" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.36982293195600646" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3756216072405745" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8273117455221906" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5704937139120612" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6910825898734936" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.48716847521093776"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8058979520918215" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4954230544027809">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6461300952138336">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.15820300009241084">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.43037055583352335">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.09771172670434436"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6107537650768877"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.940280373178304"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.26821209875532137"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5231992238832586"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5824237262135488"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8791460925247454"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.012562688035327785"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3245617976334887"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3520693825560499"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4239583489248786"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.2087929266760935"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8592777857601364"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5728705507590812"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6006011742263042"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.185469286570342"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6056608174528213"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.21222466329798118"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7948004482906383"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
