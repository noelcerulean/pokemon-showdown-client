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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.21800608113834663" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9591435737346916" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6048705990506018" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4879942032269322" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5597622885709033" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6996031108882157" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.808017724454698"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5429909186245989" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.06547109275169594">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9500415813934384">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4352038561458942">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.981573272067672">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6764061716555256"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4807981464349209"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.0451357204929832"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.985811656700283"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5798725353722154"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7631214463462521"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6559802222892714"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.14290025836193543"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.26725921363701377"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7955785595499676"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3757074996502383"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8183923335876218"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.34194909322437184"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8208634053290247"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.40353964403765197"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8783389728938389"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.912067464977655"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.22940220828886715"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.34842914853212115"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
