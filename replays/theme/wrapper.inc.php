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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4620034235305326" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5577838094837728" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5518229556237824" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8800924880253242" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8204598119489817" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8437924288569219" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8420252639435981"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.09775305843947768" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4127699915034355">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6973746727054408">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7094644823581977">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6027371423927814">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6777926098153213"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9676336946320592"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2258599269641719"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.41253455355144686"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6140299800227933"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8196366007778331"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.018798980953768307"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.425190535305924"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6112135594903667"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3557424152689046"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8620020280465834"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.03440243725185299"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8131375332797082"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.557203213807753"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.030073207453550577"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.039214672112418913"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.19322398155826948"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5383329031445474"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.027162163669871564"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
