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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.28271102841900575" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.15665151725707283" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.30442216138774714" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4726812974356196" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.616406281078407" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.17307266989410208" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7263057271152611"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.37126181026196226" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8520598694536019">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4199527421330669">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7084201597495179">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6516146026721854">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8071997003564395"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8824484989100108"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.44063226855695015"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8299994791740606"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4731200773561133"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6561409284407882"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.680128984608459"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5850129854649784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2546551800015697"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.16651987951465475"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5866267670589962"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.03272434553378667"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3972495775667415"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3836543634054155"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5033777390350964"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.24636159743305064"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.19930190443480633"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.1627587255761036"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2633309782365296"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
