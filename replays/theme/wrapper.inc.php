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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4878445352589762" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8409310260968184" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.21874494681081935" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3181143635145778" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8948461429768741" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.024328553236820483" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3994389201672488"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.932257241954384" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8890016579463274">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1961149270817164">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8444151922794445">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9265328679143277">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6969299947100014"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.26147390795194325"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4444648629541801"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9924866916626709"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.38914810692331914"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8747519563828383"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7628013487959013"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.24188055156742183"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4546116044730506"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8869900305788636"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.07827800674367857"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.028091900128375036"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9514187428488066"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9044741481389906"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.0626385230910802"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9835554418545764"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.26381345479316987"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9313307209684027"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3471846529350191"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
