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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9343254729254438" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7890528444387492" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9505338471037041" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8287372507646971" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4473759336271521" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5457756729311027" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.436691592905329"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8186761391848536" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.15785415014893145">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.48291677346776885">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9704641903393885">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5641986223621105">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.023232868839212273"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5746209651839693"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5015314922436549"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.02291310887751452"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4210288442867878"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.818709105027591"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5540818234557308"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5745583546100372"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7481020248044241"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.238220222486764"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.06069177992801955"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.14992905644731036"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7417662833118959"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4346651978628344"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9523171342029129"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8297849040859493"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8005950354638491"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5774474792644224"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5482957155862125"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
