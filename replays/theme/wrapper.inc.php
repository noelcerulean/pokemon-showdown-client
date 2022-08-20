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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.46576777824231685" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3404890879182161" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.23795868315943558" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9925964576440123" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6496178380860627" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3474490645564279" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4606147461264567"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.11346616599756398" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8762758414767267">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9402411048874482">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8341619695630895">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.08512713804328587">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.44403334796706884"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.10850995761884841"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5852078198140398"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8655722530111272"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.783150136577506"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6903464371864783"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2563004760792782"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9168368706373935"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9415969076309334"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3400410770942697"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5673684139033903"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7530680927349191"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4761486240073862"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9013520924248468"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.18473692986530987"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.07033072223700709"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5351718311626505"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.0660855229553079"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.007263969731409636"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
