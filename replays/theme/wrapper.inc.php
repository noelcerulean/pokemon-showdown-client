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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.840292491245421" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6517091238952302" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.25249638474021685" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6744602075139978" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5010655430657209" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6881663337244754" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6657331707012502"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.19735588541369475" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8404699935378055">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5073028078514517">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.46233667464556505">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4878303461721476">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.24425735522233416"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3984613588043262"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.11603453997380297"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.39373172796018086"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.450211291315739"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8721483688850666"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6144801607785397"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8951967540782817"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9743756656928051"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9217463692997234"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5551729931483369"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7606012408481411"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9681853928846875"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.973212218043565"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9113457089759178"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5325823539147152"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8370598216190446"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5902329427325621"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6707066199219414"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
