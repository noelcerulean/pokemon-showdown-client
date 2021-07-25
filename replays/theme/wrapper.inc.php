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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8571909500802644" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7706346233646233" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7331891830741903" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6491980370118293" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.0469906411672425" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9687297780923969" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6417270152332852"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.12159732570533355" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6019611514407601">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9473232588364093">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4976384751442917">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8992172981773405">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.347482413815569"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7225924759332838"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.1329626748464401"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6397961644614052"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.49869608805365395"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5412811445752157"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.26850315254529655"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7420327010773076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4161003324201442"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3971389172854245"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7140949638005816"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.1331065825491209"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.1888285449439573"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5880590103612671"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2941141042815958"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.08096036756201164"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6101281362419555"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.03226727284053821"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.38884448631317037"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
