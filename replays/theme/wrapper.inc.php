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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4840469435211341" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9393002833680806" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6744890395574297" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8227130837109844" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6179762929778982" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.0006677268630013167" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9829308268261243"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9141085229528125" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.630442701641921">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.39175739101056095">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7354020445739824">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4605151032688315">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8457301934954362"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8423079823928605"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.19370356142133738"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1467168050452876"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.17208376157953986"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.09962476045543478"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.07924176835063301"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9978508887490092"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.809811728289221"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2739995075830379"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2882815304466497"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.26960471781207285"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.25114468322684025"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5255132335148553"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7825090953009148"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.18664734115501247"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5830947695637574"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.052585210643486535"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2017626369296348"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
