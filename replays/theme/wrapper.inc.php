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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.668468715732393" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6082849740786462" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7919968340284096" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2547001914590312" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7349082491545169" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4656476425628566" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.23696994396635063"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2382025082557946" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.290999327870336">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.46889401159833133">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.21805608535397614">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3347214583402529">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.31235363221743206"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5767402098919396"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7295614958706234"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8392987250079409"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.49323869606473036"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.888865505847712"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4563493622032817"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6179496093796422"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.924774172884615"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6630495615287857"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.11061612950818489"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.17266805184664769"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6467117769285591"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.32263980579932183"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5581402154427901"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.13812565763986573"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.599358702459893"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.29128717660608516"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.536279124541855"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
