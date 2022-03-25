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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5736600922940043" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3061256895577902" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.07489476337105105" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.004719300325485287" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4039996217280244" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.711163856247671" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7199624074515683"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.10272885302736023" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.34942245271106764">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3206472476779143">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4265459060340413">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9243374855842799">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.29085085350025985"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.34303914803132796"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7962333962525967"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5526882491397938"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.009735258687502135"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.46650242452969937"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.32961668141667855"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6213849466848085"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.24019276633037578"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6796073986129278"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.33164629544086255"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4147822350265795"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3858143519851993"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6063217613199385"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9147255513095542"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6645097560283659"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8700472854787946"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.0322359189858763"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.37687798892250024"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
