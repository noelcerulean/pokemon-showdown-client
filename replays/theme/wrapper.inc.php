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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.29342990217120457" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8485396894866744" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7831925574443723" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.23012473233364839" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.21530208249221627" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7295215983005381" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9929739776637856"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6782718791245947" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.005037107902399196">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6874357476239723">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.28249667905073816">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.811896581411008">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5826242057070792"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9411804275873015"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2960202908436853"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8058449577025073"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6766570996060328"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6136113397791179"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.07756246811184897"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3410916149714709"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2234635938624432"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.31910637013410814"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.72574243755373"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.423400821210171"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4027503368914793"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3656839536927903"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6621074173455221"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6279700194144728"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.722985469112104"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.500184130787902"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.514665929063508"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
