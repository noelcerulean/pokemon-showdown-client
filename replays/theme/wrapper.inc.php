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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.28478261160591245" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.513291086943003" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.775145894817086" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.28232217454680497" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6840512907147716" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.34967526741020993" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5433477747737967"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5908139076263579" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8033612750266022">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9000965044726084">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4344846331511827">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.25088200412451167">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.25075023583953504"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3530476514310117"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6469982564192247"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5379161194220565"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.028058429822890973"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.37157461863134467"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.013969940895444788"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6474531857299484"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9423445868630496"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.21593944904071716"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2416193464888512"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5556027314868535"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8458856844419527"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.093464881817384"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.549822958026108"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8523922269711135"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8441063830980675"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.44322317248981125"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8061390403877169"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
