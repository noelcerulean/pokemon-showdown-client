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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.212665233649463" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9848582976119313" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9556105429293751" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7461418769060733" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7063258883720427" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.27003876071039046" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.21338579399261448"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.059766350688392755" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.19076252413179562">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.10346319055957576">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6345503967471593">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.37564466528254137">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.09879682728390637"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6453221870240855"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.08386452915341125"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8960632482481854"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.041227099751041996"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.05586181657644862"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.46856265663988017"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.022355375823089885"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2479939820297945"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5179011515877678"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6198787863133821"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4749144780047967"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6137612435206417"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.367323127815518"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2003850864050063"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5223920238199888"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7721540272990348"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.0807596839660194"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.14630090652799144"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
