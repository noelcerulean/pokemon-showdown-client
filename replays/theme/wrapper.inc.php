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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.15991328639525348" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5884432704702427" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.264905332363345" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5077528155099893" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.27281242980765374" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3936348710817361" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3469019503623383"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.698795385163171" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.16210743940151895">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6377264525978685">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3270418464755056">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.29690083720698235">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9324852158604591"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7212605597782284"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.01600662714003187"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7803696968978373"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.29749900846178834"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.14529248274457496"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.1808239553707287"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7081880263000577"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.025109125964188017"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.1916232715159567"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8743228803799661"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.06781506515382629"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9184308227011337"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4743064060717448"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9624954928080927"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.2774026133295413"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.193222105536911"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9726497598666322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.26961655009178265"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
