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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.43645766805400643" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7621215918650972" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5797738101347112" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9522548488761955" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6411416249086366" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.29131425798660726" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2601731625191779"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.46556049546026324" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.14868927916693941">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9019755981163309">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8581103213839556">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.39513210599715953">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.23934394298615902"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.20080976702352404"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5765260000386259"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7389958043676581"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.02674617263460366"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9922783700524966"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.15964565426809796"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9744134171200902"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.745559744276376"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.23295229489447067"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.24614700418349766"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4561015890843634"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.11125377925676183"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.02885644876213278"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.42666786449641636"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.1754988761175833"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5757740525053316"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.254205345458709"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6238869790705899"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
