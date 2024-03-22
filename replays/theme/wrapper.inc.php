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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.44931975613234076" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.43360170326273306" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6958340025234455" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4047501956801225" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7081063245305341" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5596036154775439" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.16690564935211305"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8344448136158784" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6405532792547024">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.820227462622299">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.37575293434247836">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.31823478673453787">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8643190767663109"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.21928330700282106"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5722605544600077"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.11645611727202176"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.02295107129591578"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8302254438051901"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.45863159187354974"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.37849912094730853"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9034750400016516"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3878713719981892"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3360742116512765"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8381221163077519"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8037289740872249"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.44873635921688115"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5245087414062346"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4302684788131037"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7826320083017972"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9793301060739363"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.0025077100357564497"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
