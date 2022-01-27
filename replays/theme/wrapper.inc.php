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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.315336698330978" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.15696032091124912" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8434600455141903" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.42940110814963783" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.1907535245784433" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8201592624206577" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.0037623503415986637"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9708707526041283" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3366617776107914">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.528491397357201">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5243399550073291">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.44495063302811744">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.19129035210687695"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9973613909735133"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.20482802193971072"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7825248257420376"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5187610950996426"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3324959396856617"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5143535521332765"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.22700428063080968"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3904534402622779"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.19731359715520336"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.44339586839062095"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.12036113338875287"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.47453988632853905"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9417004094720658"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8171499191536051"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6110976619294117"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6497223279808153"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3078562565704137"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.19679532711371062"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
