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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.22037243146600116" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8178843852042361" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3064368550992418" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.06053990890676908" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.11091081677597225" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8017408690171213" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7519450267524641"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8481962477726386" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4901402462960778">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6702112032945939">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.17184674604036188">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5511912170155551">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9906806179671293"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.012990051801410996"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.637526079071858"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.22635014056502767"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.47180651224152204"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.16635399110298454"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6159999146700674"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3020869467614846"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9163102183749492"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9152852658129316"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.69168039496182"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.10798922222755136"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.33162379186574675"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.254837519717134"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3403340889934412"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.07665086049068415"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8228771193379882"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.05822787427872855"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2206722368673677"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
