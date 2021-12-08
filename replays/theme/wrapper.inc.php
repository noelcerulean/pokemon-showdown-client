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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5714024805716391" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7692331733792046" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7836859962928284" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7842068396022599" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.20791938406971688" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8945623752543321" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4610153018680818"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.0423627616238762" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9361686201115247">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9424774740886102">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.038333069181521795">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4854379318782325">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.78860553934587"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.83467702569506"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6721853839029619"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.05164688290407837"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6835961407861433"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.760175153907916"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.045720744031448435"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8056489262124455"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.31169027567708785"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.1362030073862477"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9733058904502767"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8529635675642997"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.854956027904715"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.435706190327944"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8768589893254215"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6121697515569307"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3509257012492988"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.15399514234234624"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.06953065817378956"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
