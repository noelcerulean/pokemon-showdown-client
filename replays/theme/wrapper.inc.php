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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6283436005730807" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3980822826720327" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.43135245673857914" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.25282446073238707" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.2763977535470332" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9466730300958979" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8211806298415318"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3259038268874104" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5943797945502398">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6012658265749731">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.0545731839907424">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7424003081863821">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14196104911871066"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5127337095777051"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.1992372963949236"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.273164505921051"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.044397531867995665"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8790090902278043"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.49020428543267935"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7608441555609808"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.17349691121988076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.08502280498327641"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.714339799918229"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6034443645656979"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9703525103627633"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.020777988836614192"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.25356182354450496"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3259085523136869"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.48543231923133834"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6353493395975134"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.18579828061613646"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
