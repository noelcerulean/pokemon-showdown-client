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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.09461440934809562" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8207016194323202" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.46606740236429123" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.31500660904139344" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.1607153484669892" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6368810956091588" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8979920669454222"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.13457374489214335" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4104532816031006">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8671919803027">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.06331439649187942">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.03629371873098064">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.027524366254612076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.06898035105024758"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.20415176585110162"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2570065726190782"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.1354682851348552"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6130058763244515"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.21473652531012455"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.32643532451058443"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6209443787224536"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.053876132089066164"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.39309990015793517"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9695089540208235"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6763791077336012"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8996564985015603"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.0692787593373525"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3966966357514894"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6642010054647483"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8404170389422863"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6682325407127117"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
