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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.56706914902775" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9007693538100188" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6016986285020751" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8864663385310403" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.45630109879042413" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2450697014646397" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6876430485385718"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5300197643711879" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6202493502906723">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6988174521874733">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.09689035493785747">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6729916363856754">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8787513172453787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6717071418100817"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5159132252808925"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6831966047247029"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2119722500008261"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.16684600061863364"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.381601511160794"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2318287419035192"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4811406292822591"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5463068241657187"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7247145517910034"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7753486578021829"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4800334000476363"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2090992373880356"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5105516676983031"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7283500494695059"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.157158621116124"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.47621702200507876"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7979789514113678"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
