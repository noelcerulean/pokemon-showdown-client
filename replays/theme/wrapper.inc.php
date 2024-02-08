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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.32866860282819443" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6611184246941653" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.02945518241642664" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.1210990779607024" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.15867831561842172" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.22982037686396128" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5178566681441799"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.37497828981042813" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4130000708807995">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2269718704592627">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9271309072952494">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3621129449195728">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.04688605569388882"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.034927051636291395"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.892563566826158"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.268191058260842"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.062136254854249895"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.27378059054600845"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.0700391941070897"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6011798149532608"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6076837869360585"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7567819076570368"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5444981834321618"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.22881000502662752"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4577754460186456"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.18418245041763992"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.0679271572549911"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.21836293192522316"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4056767529681571"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.16226929133448476"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6682971591466653"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
