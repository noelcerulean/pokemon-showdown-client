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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.782743232654826" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.46236659248888334" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6576939925481136" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.40484508575269906" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8228756326040134" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.39676044163634816" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6715427771551683"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8620371906257749" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.32868446567013465">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8852185504933408">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9062955820620806">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.028214699425483047">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3233349015891651"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.46357359147066135"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9941290440437927"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.68146731269212"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7473403137882999"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7482413866848847"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9730689496609926"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8718895435516807"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3551172599105221"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7996020659014365"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3380688134669252"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6688752402591296"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.57743900194272"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9764083331058047"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.1506586432065753"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3526430749967322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9834651383919271"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9624748639291618"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.48717766305928234"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
