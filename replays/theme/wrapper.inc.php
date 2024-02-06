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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.06536979103119966" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.46671603440550835" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.666278338684867" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.007453544071859497" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9592555011201904" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5185500908527692" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.013857418035329028"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5395264686916441" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3339173630404251">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9395904764180354">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6385442048875458">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6335550480546486">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2269410171425439"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9546999243595828"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7871023449116992"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7549554092627457"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5419630420025843"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.25442898778545375"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6410962862479583"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8689643420668747"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9301068281962905"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.12585235403239947"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.22060620334632097"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3429918659387956"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8116440328015384"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.27447114805231587"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.423084366039574"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.0905648754627113"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6418211307288695"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2730725959580531"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8299341452376934"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
