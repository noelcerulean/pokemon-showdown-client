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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.15896800676610656" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.09336154656496976" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7973508775678086" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7306081508011901" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.32970442038223347" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5442533959774771" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.40772661162754065"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6744181288271329" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9573173754994133">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6206090186396804">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5882982003540447">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8625260389891007">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.13087671056055394"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.24762281876593528"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3866090160406004"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4436698164946473"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7576340225511065"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5826513940863385"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8717654403022173"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6969481671398341"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.841271248694391"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6643609773109467"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.12478415796049536"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.991366896851497"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9292616918092691"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6036986758223839"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8265243344808781"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3556906069030159"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.776008999996191"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.20464881219526654"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7857741396353277"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
