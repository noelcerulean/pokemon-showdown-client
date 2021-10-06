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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7213417190358915" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.16475113447313738" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.036122752229679644" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6686984935035194" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6550061729479426" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7973046007638156" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.827107753632355"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6141571414629685" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.23300724715643617">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.05941935333512993">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.1477713665299647">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5393701349212228">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.09950169488882765"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5976486259952589"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5724811642595691"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.18442406006181056"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.25351965304933266"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7869873822946047"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7611841313812053"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6935814293874449"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.676066382906227"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.29007724992456474"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.14674231538216387"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9165177966692237"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.0009230147335634875"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.21417175061484084"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.20531809440610505"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6092168808280409"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.22369892440857697"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.4651647608928817"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9573633350750637"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
