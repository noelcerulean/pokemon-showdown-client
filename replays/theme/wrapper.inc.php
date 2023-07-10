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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.38503349026269507" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.828057440900763" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5530108497338977" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.17656582005071897" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.26513551338359065" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1789682224560547" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9336918001234642"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.15463541692769733" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.45372506823234415">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3815064663562926">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4628718364764737">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4728833953163696">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2279302129345795"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6064810566990007"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9670452282514634"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1441407539901991"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4512599264044381"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.13674812968095695"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.24571495428095047"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4781283622147612"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6256359688272646"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9887049381297448"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3569154769294809"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4063194758524198"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9609147043170598"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.49666844442239055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5233874391557629"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9353733163694409"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.35339274303964285"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5052157884180892"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9163224928603444"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
