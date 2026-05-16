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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.04155226505375276" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5672575610639732" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9118127166150527" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9936832814591934" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7167479546956845" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.41725136516848704" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3599687225845456"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5735243131138317" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9637371563649806">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6461704676300477">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7603654346811557">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.2139861961111209">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14408896142408945"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.786537630247506"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.10021066112418753"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.18425714962167095"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.1683631081066137"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8219147726697604"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5390241670208551"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7224720583321682"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6995727429634437"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7961729467881937"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.484361888480342"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8927606738388301"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.07730538246474472"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.38226957182211563"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.19846180120748347"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.39528181689654396"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.27310479529351395"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.24248136523294783"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.42772687530452735"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
