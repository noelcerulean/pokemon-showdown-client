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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.38949538209090195" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4283154106525955" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.02288783145207418" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9669858962037752" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.06204676521460151" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.28634186887194035" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.1525091387539781"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4293022172670542" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.480367563703892">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4181326013443327">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9011826474453355">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.21234473394932607">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.867906577304147"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9069997073426022"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3106068939050022"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6637852258851007"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4799568190651"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.09053191734499788"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.517562974965341"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3745813130933462"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.06105933535302355"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2140300751482218"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7532148331984712"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.2389331810168298"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.2489100407128224"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.43943541633234195"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.944482534221577"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4018882398179975"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.13752635760301013"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.40387858576011126"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.06636671194645549"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
