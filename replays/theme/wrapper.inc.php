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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.2378733693526529" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9376625232800582" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.934519903652858" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.009089722017388668" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.10074507661395504" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8046253725810408" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6958756922195066"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.33731390979129783" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.43323952452629744">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.11726095094889843">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6809906804578998">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6997189537817685">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.0402461398483851"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.24499935276481866"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.20418357881259874"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9934844917913606"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8146076326299501"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.20896781777289197"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7489529076553385"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7694498664921334"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.637518983548077"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7712553305283736"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.26580108809723146"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3703125564934031"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6335487034947815"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7212316116168584"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2976909087299773"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9562505485291017"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.06234821261022816"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.667966046264072"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6703741618333188"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
