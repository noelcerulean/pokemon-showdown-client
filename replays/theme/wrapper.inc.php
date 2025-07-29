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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.651548648821068" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6428561949597895" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.43079762722684145" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.33777923725244574" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.953696345948845" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8448849292907656" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7433393682085401"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6251864163443304" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3293195115566987">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2906315020024288">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.23630417992349817">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5222078504592662">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.41144523793834353"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8660304775972509"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.41986487787707616"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.549046662764161"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.541569164645159"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5994946506442362"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.03743315967048555"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.1638958123950831"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.23199952906800037"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8573600994036181"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9044319426594396"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8876521437452736"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.995887157637342"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.28690914285414393"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.05165526025218958"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.49470773103291443"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6368467586948401"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3508945128289591"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.11014162326701249"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
