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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3536987887748799" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6306920634423416" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.04857170190055782" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.14726025269321874" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8171360459858754" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4978974517057788" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5059342607225512"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3580460126291125" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4628624526417673">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.742144294163138">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.1929484582041736">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7074240713877975">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3312495726571014"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9949942973380037"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8893763170731861"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.10903382624464131"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5052959290858345"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5247179404269795"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.16760518303061067"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5976161008126037"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5767268099324763"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8067530122904725"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8421240498834981"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4614259522388904"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7874583490847573"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8194236077601802"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6334399853266417"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.29071667487903596"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7238998790644726"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7159735283196078"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.28107205496027343"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
