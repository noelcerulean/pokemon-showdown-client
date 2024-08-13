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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.020375867780847212" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9811627909354854" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4578360967259867" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.863894262907086" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9248265348681528" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4724854571351531" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.13604029589330535"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.625764248000444" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1739341832711616">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1936922954072422">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7342129530849058">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.1161527148739907">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1988810992929928"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.17421603379724804"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5126857298016825"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6409580762041347"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.905865997447656"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.026238592932165572"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7266856857334365"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9999251678905721"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5750936077865656"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5808707440474634"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5233955990841446"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4300060865250013"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3229896692912986"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7116726089946099"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.36309715752716043"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.14015850850201517"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5426379395520124"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.04456158093497886"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5640183770482301"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
