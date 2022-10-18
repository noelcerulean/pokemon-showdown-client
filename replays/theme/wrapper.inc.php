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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6215472483031079" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9221491345324546" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9557313358649959" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5457422226008324" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3049414386325102" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6758280287723815" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.007555113634032384"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6186243531743472" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.04256434241730345">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7828218177239539">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9678441534174349">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9535641426909411">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8962164999503974"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5256030075239972"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.12016457185508345"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.47598312868781667"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7528352325914645"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.07644589755069364"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.31258100419129087"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.13050346215498565"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2621571060469783"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3160898921185258"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.10371625864867418"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.789325773932477"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.48415251608347076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.48338053113298796"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6411300471202259"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8084492764486206"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.906958879426051"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.44725040563195395"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.23688514854752762"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
