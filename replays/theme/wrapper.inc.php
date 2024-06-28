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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.539880345575094" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.10040221894034063" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4131735536568091" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.05805891690126397" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7872024395608566" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.02438947623326526" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.04440495599921612"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.06233203531249898" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3722122143438995">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.43997420376351726">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8834827904366911">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9742123391124013">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.03095961950545889"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6165782675697031"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8123946589434994"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7164652223207248"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.612570868925266"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9738808660393257"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.05726807338962381"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7784403789537102"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4644225533315949"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6054439746613092"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2847631745904542"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8029936698890923"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4766944644473199"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5747031143541672"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.736393253121006"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.056204811656451525"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.11666985565078924"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.057082785820177895"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.07423973095774805"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
