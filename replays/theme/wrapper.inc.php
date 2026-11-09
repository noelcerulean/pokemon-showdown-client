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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.18647275732350643" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.659925373191556" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4418078615970086" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8850963392748096" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5899499675893084" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8868460164434832" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.09051720944030606"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5009800737683824" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5934938194757657">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8529505496661649">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.760703153458212">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7976486481879407">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.23749234632766758"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.15566740518140465"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7562241379682176"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.42698830878610816"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.018941242251454438"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2065288262845698"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6309368095886382"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7953116142957812"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3968081546655976"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8100848651617801"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5107392260308342"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.38481094658465054"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5296121126337906"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4599265533827086"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4017078378223985"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.017431627547036976"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8205091583893648"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3098949907283203"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.23873086286151357"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
