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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.12378843464589462" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4450920522472601" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5229611301945463" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6076254172301576" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.216586132125814" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2964898231911177" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6794353506915511"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.11473774692917038" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5277319213658016">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.852422505846463">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7270266894473245">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.795027574351324">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7141414616658601"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8229436501774572"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9186075401166374"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9940838552900657"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5924115790946374"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.49703324908051916"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3993293711389212"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6527975490795428"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3102704949165922"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.09895860457154737"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5835493520642983"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8052752325618744"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4770838177791945"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.22453493508495903"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.10928515747042611"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8870283074599812"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9804751891320327"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.05624140354120466"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8791679239164316"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
