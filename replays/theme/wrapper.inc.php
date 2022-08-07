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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4121916594114903" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8110061237564192" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5045432034868405" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3473823174600592" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7660354514904999" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9574829833168119" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.45811870892089845"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.73496547177669" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.28501623943021603">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7787654639927792">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.04315632798525493">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.17113672551679238">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5307837310878645"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6739550831969772"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8741240448719141"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8966670738391636"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.07283582208070194"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9754622050554143"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5860686884740787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.19964127086310857"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3731127952181281"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.24994329520927527"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.10371476177014616"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.1707185575603556"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.1205367072877559"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5438841275548578"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3345638216800384"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6465131617724844"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.33457882958934704"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.682590528669941"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.4051388039659216"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
