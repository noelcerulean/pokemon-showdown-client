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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9982736866863302" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3556122532712318" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.0020137596949452163" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.28277111980607983" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.04399171641017241" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.41221727926956486" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6710977298374006"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8856239472265524" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5024593816274798">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.22079829621248082">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7814847753182892">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4722183385937">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7867124646610038"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5267821808190225"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7435460025006826"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2183306288910527"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.13507648332160094"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8318530030164799"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.048085448417894305"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8861451420835234"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.49051458529551306"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8105829138260552"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.38560555160679466"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.1334832381088844"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6231189812977451"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9352494863625291"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6407538451611783"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.982820474074813"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2993577808101058"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8717408664862922"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.642234232221891"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
