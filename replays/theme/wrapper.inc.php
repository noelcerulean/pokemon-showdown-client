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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8906257662221793" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7399202711038682" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.37691953456400995" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4963291446213529" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.34970882858790797" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5470850069618349" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3469052972612028"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6726328697746651" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.05967604914977387">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7276779530767252">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.29484832214894086">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.18673275364557873">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.08440988565651919"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.08509602379958037"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6983203527454971"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9735396347031309"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7983465826194949"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7461637902835621"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5771005008573713"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2523302343341558"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.566266806714055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5687865325998926"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.11159302200484444"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.16416950852345336"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.48738769177581265"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.45143582174765773"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2803712229112134"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4836738479883882"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.40581302156924903"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.609812438571603"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3155226312694397"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
