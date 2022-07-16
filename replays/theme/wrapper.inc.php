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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.048141690734536" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.06847056126440032" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.878759382820334" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6532897158987274" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.1192102848127814" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.22761649078917223" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4203676354894075"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.22018377926357657" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9127905044811855">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2700424887311519">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6558332496383918">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.45579070896919904">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.25598401704747875"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9529204102365512"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4767003992818404"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2058523582698477"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.783899369689967"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.20636091045790184"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5323776547741677"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.19467610739936014"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6018027232790888"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2664928361218648"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2212411046863234"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3794200558805614"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.474891439110688"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8583324863728998"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8805237129627157"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9538815984854365"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.1816126383595671"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9741510316637552"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9964137263801818"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
