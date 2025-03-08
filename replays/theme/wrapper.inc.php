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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4371449263137206" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.708010140852537" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3753983651748438" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.930367616686941" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.39068578658991227" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.29499492127050897" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8182839150470647"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8260941847791061" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.07559812877208905">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7350946050424223">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4381549206444997">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5100762017864309">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.39263684593073434"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.06057440190896157"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7361476232582249"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.04980322685577798"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3013129224587152"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8099712798272609"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.24700114003581009"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2995034143332953"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.15106383954674696"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5460514881604943"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.12360843399530519"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.11066168929906084"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.18486632995332153"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.19785845355720788"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9279068636224059"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.14629435277029557"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.08408783259510133"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3221716147609395"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.41431488745678835"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
