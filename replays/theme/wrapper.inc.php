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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4796246520384344" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.29617685246152536" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.0677884967301432" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7659538530807113" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8272883922443119" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6180325196688441" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.48521234923199774"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.046306122958922336" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7216439020445182">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.008568131057108186">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8221115362714031">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.23350214004085812">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.022177567760451433"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.19629943937450722"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.11148645514862499"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5025511600213721"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5607513280710428"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.07828701805703253"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5951330679764752"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.734775088862565"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.35958903669694986"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.06241046634101588"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.0910888037862374"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.27661506760986554"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6369503673897938"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.47739477451599033"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.508178991792753"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5247874848838254"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.09681548016778008"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8291623940807333"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3707504954127072"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
