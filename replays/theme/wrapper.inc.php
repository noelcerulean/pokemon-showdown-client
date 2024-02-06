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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.06575773793200113" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.07902769854018832" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5694118240693082" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.10044510489630931" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.33418379630786577" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6303948077156698" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7237557534334131"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8576397614811595" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.16172805970105375">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.14435134367711377">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.37172285594359766">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8908450155638106">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3226833239829423"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8649312760559082"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5475627201852318"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9591757826521181"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5232949239853208"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.31932415150583116"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5991076589978737"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.386745890547046"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8486564322941541"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.23095375363458714"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.21856139119625895"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4961493555161396"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.017151033775247182"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9502564110509499"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.951740863043953"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8230304505329182"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.40923527340943266"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9703694889827017"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6342306374376541"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
