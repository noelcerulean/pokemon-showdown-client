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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5194209694854777" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2981063684220513" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7926812182508582" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.27496203820589926" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.20259889928822372" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9743213117240628" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3248190402949276"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7450113394062128" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8654790148397751">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.019956993962858327">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5077010809676519">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9085267095181488">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8734511989019718"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8305502997566361"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.03429401096210749"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4199353120511695"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9397880527292126"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.24265690382819605"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.23057984819036492"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.21709694831619863"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.22233297885074155"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7830257150583448"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.490867799714497"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.33359490369184375"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.2670097856702003"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8721788891046744"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6000298273395328"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5616039974155971"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5402320158071321"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5568079403657815"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9180282278788758"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
