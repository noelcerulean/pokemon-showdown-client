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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7944342019288768" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7211000260210367" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.35883261642860953" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5879682850846983" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7304801299937569" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2885089387964834" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8342687074507258"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5785483160633085" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7637836346665361">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7961246503147508">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.2938717917762308">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9643756701060455">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2873594706366114"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.18471760313111596"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.33145334665431236"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.003055987581294106"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8158383987766169"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.07717463552273962"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.22738635222574244"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7704803854183904"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.18790242777673427"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9828629562271001"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7983398474294918"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4754243261588389"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3895501896854354"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4123606028090079"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4097444279122904"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.049809819882530304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5035364500993538"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.656735675511354"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.18043029624219176"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
