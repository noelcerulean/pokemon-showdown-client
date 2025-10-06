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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.09290725854455562" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5055417969304854" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7486344766896587" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5245680476212264" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.09619428277933428" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7019406768232137" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.24472183999762764"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8079504090162959" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4126262188990961">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.13023227738947507">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.37468768242357253">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.06657522158322626">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.38927318774191977"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7585608589529944"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2868232619858593"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.21922405961118163"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.33337928548700035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.20190028795470827"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5397881180258135"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7640517326518181"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6614868495971535"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8542011605514908"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8314867798030017"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4115334037541907"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.829858590833876"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6946252644874322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4391391378743783"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.46298476646155673"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7290334386283015"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.22200679264424927"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2551443293448452"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
