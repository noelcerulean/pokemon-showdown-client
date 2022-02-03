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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8435836108000663" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7842154800233503" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.10099149072968072" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.1796931024163726" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.08587254683047485" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.043064855500589694" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4915388092204125"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6530515933362184" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.20986723120343176">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.005249330686553533">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9297787970358458">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6476667274563792">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.10208872794986434"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5089117575686666"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.010181618362324008"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9520991386085438"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5945365918240928"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8243946696256517"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.759412114190092"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7358852238424143"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.36084820442669585"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9641062127442348"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8781313050463209"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8861997075717654"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8132825876300978"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.23365259600907318"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.08006036263624372"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8403280939416489"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.525921496453087"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8782760731045078"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7431188636860735"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
