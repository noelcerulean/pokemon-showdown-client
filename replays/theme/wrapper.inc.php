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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5304639860522886" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2939328976623172" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5261371481535204" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.740110330735626" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.40284113441833114" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7277936190503571" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.987365976769728"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.722121118699562" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6996618467487852">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5760927911527525">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.06848635614661203">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.39235936408553496">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5489020317274276"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7590439518203183"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.56453357558531"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.028704087040736903"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.15875706051955873"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.008570096362479296"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3977383744346592"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9162139359091568"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.13461454825402996"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.327446413766701"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.21561375567364482"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7149187121052192"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.24339672852125016"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4171202050128051"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6769840688387281"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8152414668392818"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7956339969894974"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.758094054209318"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.732285344412626"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
