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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3968088585718794" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.1509871393732971" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.671273339967033" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5695967807820965" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6954723037850801" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.45679382568596516" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6529235103509172"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.12157294749795389" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.39597593126456565">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.07879333869320071">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9727061430278126">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.2831064040389475">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5507349062359206"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3577329661081763"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.06956622314448713"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.16972558254283387"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4707384417969862"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.48600306343708133"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8015029177907644"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.42406640843953536"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.524896282701069"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5519379859829061"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.1655465520253998"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7639863960180537"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.41165882376631124"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.03856308905589789"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.12268477670529077"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.10470617398286897"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.15855838972680947"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7998640530762813"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7389063059748582"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
