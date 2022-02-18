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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.956124342639971" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.19109232461483416" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.845437301441134" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6703859880142884" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8143957422816623" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7809019964394925" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7790518780147293"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6597209760906961" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.06294780949593726">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2956579864517166">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7412280917275713">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7143460813353764">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8890268693380337"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.35406590249496483"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3206480644420435"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.03816783495988929"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9950742299800015"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.42473669152879245"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4661544437167937"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6162769227124734"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.47134561195679603"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4937124974345273"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.10999859631049946"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8115912291967751"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9117046867208731"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9161523339169964"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9340940624484231"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.12064589340770193"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5702723712880255"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7986156062355423"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3937592773036922"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
