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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.555968030897537" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.48356224411304405" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5630565163398102" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8329923445422576" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.23464411173157607" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.975766309022164" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5860951337095246"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.666966768679947" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.259515821402144">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2118290508732108">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4685926454263223">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.10221008765357409">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.24462346138957236"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.28574352598612474"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.18896344671892407"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8415773725286451"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.40819305894786884"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7115123314637926"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8070608455475263"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9176575626870649"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2989568007040888"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5123282844512331"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4415001564954939"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7182110873927932"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8783805547416745"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8819734709250757"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9962639799917412"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.34010497193086553"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5557869851225179"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.140079495739454"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8021601889308394"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
