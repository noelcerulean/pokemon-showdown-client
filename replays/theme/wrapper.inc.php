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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.2043330692126466" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9240053289964878" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2509679314602209" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5699850606582684" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.2279225492614807" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.02138181719551202" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.00016799530473132762"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5733606329695582" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.22177191546236408">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9240230650418366">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9352354086607995">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7365764078987544">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8514042543508522"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.05592100844114767"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.14781343305735062"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.17516720635484928"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.22738089561878638"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6781310716097861"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.10682267553907776"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.38197634696584704"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9386126449560304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7759274650065813"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3445799866999133"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.809776701892613"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.826638969078356"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4671810172916979"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.54990543832804"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9817863702948062"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4324178812713311"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7702609676838568"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2671384736865483"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
