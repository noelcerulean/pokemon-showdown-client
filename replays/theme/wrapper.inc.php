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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7993702207571529" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.056384763647440606" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6081093965946303" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8436340402005957" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.952553003822326" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3529171340527537" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8619747707424616"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.44392013146417275" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8828212390910366">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.42516052697321083">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6644823722526805">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.08304677324164333">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1718242860624415"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4310930151880503"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3050093705342882"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7607726913573405"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.68655564034769"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3599668970075476"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8147528336686172"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.785413416870048"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7744884340930689"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9134701371898428"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5145513620887445"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9968304137309805"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.04405468320863459"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.0505791867723675"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8955979211897258"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.732376256394335"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7353650193984689"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.56824798428957"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.008628747915693902"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
