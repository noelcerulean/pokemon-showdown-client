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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.17683148437994456" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7970392043167762" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3093015767517866" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.05135673936700247" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3562317012000835" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.04045025832134663" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.09886649630705802"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.31877210855355376" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.07272235783164294">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.26991856383325596">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.02877656409920193">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.08755652056196883">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4677227020935699"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.15002158642407504"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8826833591681247"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.34391064923463777"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.1023339795935807"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.16054921370580422"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8647590793181039"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9918574139360108"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7935068512630634"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7384969646939616"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4299211614453198"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.18991385568946462"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.23846082557163895"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5729691531667596"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.726454387588789"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.33778899777043425"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3325415526646398"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7896240695789318"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9920796616881771"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
