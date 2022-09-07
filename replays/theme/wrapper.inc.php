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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.2486205956902212" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6560988668217222" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.051927635957185636" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.627730493462181" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.19899101510343664" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.15109273275751467" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9789273658641495"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.37286228094206963" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8566310995472772">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3182627955796027">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4284192210054951">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3240631139498815">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3863274295570709"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.01816799710859196"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.45801008632571305"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5393998603989112"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.14604745535530061"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8520615647242173"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.61719565152292"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7320587631696602"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.936553334194032"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4939137896741266"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8757577470991569"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7737485581686137"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8134361459387989"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9620764108323365"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3014700912659547"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3418854386001684"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4590352099252226"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6644327082300026"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.11207971124208638"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
