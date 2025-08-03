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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.36226397466080074" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8648194498126887" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.01739341284382734" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.384601322647514" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.2774706040777142" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.16872144411204815" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.25876011607607596"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6032949627823654" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.48112078169155104">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8164276109785393">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4681361755288955">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9543768551756815">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6540908985608571"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.0013019235156117581"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.017658905887928844"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5027377029827029"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7531609856401571"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8403834809418855"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4313006966945392"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.947665011424021"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7849047575661994"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7297669056128213"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3240347061333526"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6738330445402296"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9507023156964447"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7053341769815271"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7002282090033556"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4850597958975629"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.24112200123735272"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9472248199958293"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.04551419819801206"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
