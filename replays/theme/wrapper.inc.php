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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5017262148599397" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8481314009187764" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5311521136167954" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.03881577730008656" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7094733993108833" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6441681499849414" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.0630910403243432"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.34140680900734965" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1626711408100665">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8784768125649072">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.46578511524943167">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6941489160192302">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6145027111604187"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5170965979411191"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8457277723099199"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7895763622371967"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.10297370375387405"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.15368067806802022"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.69156176410944"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6310380957262509"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8782101796604065"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.09495560503084488"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7162114753241262"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.20492799364887104"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8895664664840619"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7747731290790656"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.42050567934979255"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.2652636683084033"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9751113438667489"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2746012192304377"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9908346246442024"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
