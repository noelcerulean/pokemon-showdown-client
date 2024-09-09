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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.37995679351742173" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.26437121197572155" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.18077445620679544" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.16953078217284556" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.2411427761451852" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5895749927508305" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.32777189870356715"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.31740970363734733" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9730451086950496">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.35251306854234454">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6555943512110616">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5885981820854616">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.18618573193555554"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7528656095893251"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.0884743899589786"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6862311929894458"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.05968376542599252"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5184195210981928"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6301000317293035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.13594138957708957"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8679466683874122"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8946838499808847"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8503850561265331"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.13797844942432125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7391449547589846"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.45353864619619677"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.32395644290439574"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9702849232440953"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.458760842672435"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7925950623794769"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8936706014521609"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
