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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.2629024675976803" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.731075283274091" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6861752680333539" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8007881462379522" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3341852683302453" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.39222705219782794" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9324475374618171"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.12329144277531312" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7976063774175406">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7635648328714282">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.2796548943740853">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6299216922730337">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.006097424473525681"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8030030044553713"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.28619116794600163"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5257445584379188"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9418810898416206"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9418938786691522"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4916647066663109"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.02374548224566264"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.44753826099702176"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.31619204788192024"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6991131979033038"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.0716925786453233"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5973596835095014"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9518324700728591"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5008475684742619"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.581748116502304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8106865712103959"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6209411349000535"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.726333011196441"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
