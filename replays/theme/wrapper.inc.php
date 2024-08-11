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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7369212482331806" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3074933672228439" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7161388719789965" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.024047613035726778" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.16922278428942383" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.398329768586698" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.06858460565168167"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.06161671676105751" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9078431083484482">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.0908753801733373">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9534598641302063">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5361078280989537">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6906654601423547"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.08669831592294308"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.993982594713714"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3694412367617559"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5214228805230046"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4192641604400049"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.49659747679545063"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5852431662634912"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.12685606374483105"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.12133558590061777"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4799263801725284"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8820469994648912"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.2678147403611144"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5622682770241902"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8655362235967654"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6378859212551091"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5836424733099459"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.4761058463625687"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.257523259800964"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
