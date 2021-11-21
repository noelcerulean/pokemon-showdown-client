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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.15592215494510686" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.541840513477378" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2040861367170752" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.20044142652577213" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.2477886937591327" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.38740592406653906" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.27898062540308377"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9692352844168779" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8201491155225455">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.11017015104618921">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5423235032149509">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.34281846933858295">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.09458956361082538"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4048910328767876"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8603149222550661"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5014390031673954"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9043627660278752"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9167366686550464"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9432265741568047"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.025910510437974432"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9658528569107159"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9977934428301076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6083878965911045"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.2940147144628693"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.38845297113957455"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.13020492036619058"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.879803495071138"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.82911361203784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.524182403130542"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.49058213080383006"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7547105823520077"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
