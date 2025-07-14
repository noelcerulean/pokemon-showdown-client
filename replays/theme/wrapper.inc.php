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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.20705192373164127" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5296537361047722" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3392045368682044" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6787132604535389" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.10060773922155386" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2770601450110408" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.173366242695133"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9121996774502839" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9823584848198501">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8570009216679442">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8006573826573915">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.00985718755239584">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.06352947568474177"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.48334305429512003"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5820754761770774"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.586393174080631"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6277582215479631"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5727427770439242"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.009552143677164393"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6838305293977891"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8591092185002109"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3862687451831517"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.04834565027734916"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.035848308208292545"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9854769674221795"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3434637349713152"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8018761160249122"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6198505181895859"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.810574723598138"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3613076272046494"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9755666750744332"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
