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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.333265055466176" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6865209962114396" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.37039931315857744" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5846826307243884" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9629550268798708" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1647143703948155" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4796908676579219"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5707665397682447" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9089940788169777">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2125296950224711">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9594383441256131">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7448588001332861">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7274147202354937"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9064586072152041"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8034613875606604"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7219919699535582"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.01488250061219154"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.012940731036743758"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.277399215666956"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2506003400572878"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9712982175442944"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.24276811194424752"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2760781646604664"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6127148737757548"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.23109696869261187"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5225823084846135"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3504762534690762"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7602085018922053"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6936519344865815"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8845709047694674"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.30506457293914835"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
