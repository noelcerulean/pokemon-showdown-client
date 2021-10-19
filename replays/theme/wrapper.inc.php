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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.18163367526691632" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7697655881729526" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.37947065119141454" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9373994226673119" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5857170946771708" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.21297518003360305" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.38827416303998485"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6773284638860133" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.1908307070164783">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2255146075117378">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7946957061362634">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5845569853836516">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9041982561703708"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7855711857683303"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.21855939625161502"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1914115920236954"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5752008658374019"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5356809102854063"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8611769406491439"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.46705044934925155"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7854406102351197"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9749977919765873"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.641678164157917"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6243626782859684"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.629563999697385"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7550846336817336"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5209003562334473"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5987930136595709"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.45803682940128376"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7265737457406931"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2536570502826898"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
