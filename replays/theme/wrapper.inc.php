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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9658265583079928" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.15564682624769643" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5534465747020103" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.09120282399738278" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4016796332499073" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5983897339269897" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8362103896032924"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5916684681256013" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.040829455053624564">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4964693645534508">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6015448479842869">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.06570481797870276">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.005493108320334894"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6938907653514219"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.181074216320817"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.23741467448286913"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4985566647896311"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.35373116745969924"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9662998702555667"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4857910655224975"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.15969820501435694"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6644101136696128"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7035767095711059"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5191947942996757"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8970495263665204"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.39260781081469553"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.17654510405319312"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.38521124943313945"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5772182775755217"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9861902059913736"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7238995837454489"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
