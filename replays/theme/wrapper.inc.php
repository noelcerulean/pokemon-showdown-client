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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.17738340892217908" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.40726039978332773" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5437404877020056" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.043723095327965034" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.18094261657459088" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.33380883191286737" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.19092920970932892"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9599680380570672" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8915610467628408">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5084888431328274">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.18018940472732115">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.31445669967225065">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.24023690965403444"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.29758156891041443"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.1172365470218526"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.791089486639114"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.705320045367112"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.44068003392631816"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.18920790599120352"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4370168668100687"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.17956607903692068"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.1701545014934951"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3094756944610393"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9677125900248253"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.27916491029243806"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2570884158404374"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.38883333149219057"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7381948971312307"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7836972585952131"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8676237660812969"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2315405821332226"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
