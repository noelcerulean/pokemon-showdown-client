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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.257713014587047" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.558528290127378" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.783029202121174" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4726553254022061" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7168850931611397" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5360923140670437" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4993080205352489"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9063400174097989" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5047744619367709">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5432213405978914">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.26473024949736357">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6931666702274402">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6308792024923924"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.401633198437515"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.058690164394764155"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.43292618124413873"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6798692717453103"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7388574471588865"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.248541733508862"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7331750659299245"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4291442529303555"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.41190871555508535"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.881187664918323"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.32664344994186423"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9444998818244408"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9099376549232026"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5376682954952199"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9314535330750013"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4605538929789914"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.39058684949181877"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8195929265557373"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
