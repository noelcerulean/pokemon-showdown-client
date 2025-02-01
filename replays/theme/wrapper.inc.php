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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3024862025695496" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.046880238090535764" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.1725383313691098" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6175014666508527" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8481994174001832" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1959589073038963" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.15243205989185182"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6245012930318052" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.302420253722951">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5117751740470102">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.26594275724425587">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4249972905301822">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3318970781682309"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6194310964360661"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.051700804077165374"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.15278884242099244"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.11874129821928792"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.08765353962478084"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4488541460554869"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3027502489736993"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.17650640861854416"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5158364645383804"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3807227352317766"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.16130981417014834"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5746342964258535"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6484092621519231"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.22676671152365757"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5494564861767652"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6455173585067613"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5886332687681604"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.22008705681891572"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
