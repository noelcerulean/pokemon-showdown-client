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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.34313463667827393" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.03322520771432269" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.25151778720747586" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2908946287829801" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.14565028963665916" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.056948588064848815" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.35073571749078924"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.15428405261443934" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9548906734079328">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.806280030586382">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9328405656075895">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.45822481341171306">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8852484790248962"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5890334849740493"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.344865342653752"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8816170912217651"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9362445279645357"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.10994649782040167"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6391753331559749"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.1358714836199817"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6140807999120248"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.48904368411916255"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.48426253906882666"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.07739282636852263"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7190630213518905"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8184366795499236"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.703369124614881"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9042254104016125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.17758124973887668"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8326299335640128"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.0997110464743336"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
