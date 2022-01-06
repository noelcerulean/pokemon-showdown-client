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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5951184599406627" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5514225425775032" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.20010270471230185" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8302870293228359" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3671883017307209" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5112210550916734" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5227525648881339"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.29895929038484015" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.45202144744017336">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8279714494906736">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.11405238389963124">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.43788143940036206">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6814590410182932"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7162602437608512"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.07027268821120436"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6270877151568015"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.001072131656982167"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.007340863899729877"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6329184340459455"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4365147111690977"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9898785580032017"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5483013533720436"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.49387539148201376"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.0404247010207599"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.15390197342275735"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8914504987357383"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.22107171815924653"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6721886921347877"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4475738881607234"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8698428870099266"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5105151154775578"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
