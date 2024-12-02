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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9935441924758497" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9221158900968964" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6044797342765871" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.0027617765665861604" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5485968694470444" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.893867302715281" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3498593797939047"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.045969213593504366" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.27231432119614873">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8256583945707896">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.1786402144119501">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.1845598005933522">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.46469515024058294"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.06490520077296313"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5654282527179264"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8641223148826636"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.29452097738503125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3430866904207621"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.12920942792503154"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.45674467187628354"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.644958250641533"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9381745019247734"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.15349262323559199"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.12314674671801051"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.23325300378864045"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.619700757125123"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.28456591712131285"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8584115569197877"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9925920278826128"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9018982365823942"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9182742777853077"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
