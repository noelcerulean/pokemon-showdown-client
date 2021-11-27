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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5828832494286964" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4135907567372108" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3516512693957763" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.32637994010564664" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5100941113740893" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9770229063112847" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9874389787498372"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.022945524675606288" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.560799653889059">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.18621047115523925">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.32977246693970375">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.08216076287643781">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5675014034576273"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4803806537343185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2523921332927783"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5034497652758672"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.09156451702885393"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.0059513552489265376"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.41584199504421093"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8673129929131089"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6269244048796998"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.874545649429145"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6622882886288239"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.21061995788940235"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9894837593565868"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4745909803811037"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.36165521696449376"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.40818301475718965"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5748204774221508"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8982874297936858"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5699053887295797"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
