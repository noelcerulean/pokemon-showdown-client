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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9065840473585656" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.23161104901004803" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5703406638322821" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5898664287709385" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.027553201676911554" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6979879302159036" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.16001839811407237"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.24929030497254034" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8082431376942931">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.754884742418882">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.824467642570067">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9738247297299627">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.03853012784717591"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.728489076223392"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5587942882814567"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6060916997297394"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6782102257617622"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.12710047803977487"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8760241779198097"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2178544956543167"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.24594377420738422"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5379680993704004"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9913690437177518"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.061336694172292816"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5721435993944481"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.30318770573326015"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5165721605804392"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3745694860118276"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2671597747705856"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.295571960592123"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8378816664651498"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
