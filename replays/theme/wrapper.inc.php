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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5385494022133643" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8277333493309469" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.175058062611678" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.16589174664353745" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5257176757769961" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.0938309081385964" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.43214511135263045"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7718524575400822" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5146031568370792">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5600318654815877">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4912007382888919">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.2046404809266531">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4416398074598644"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8796833326902067"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8067368710101563"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5707750011551651"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7849704718318868"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9984899337591198"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4269808950491505"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.24035318909608216"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3957318316821692"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.047470728368820936"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.37103631700605955"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.18531960140175308"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4765015879840766"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.26209295801110666"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.20445192544581836"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.22438672848354457"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.22631826474462313"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6137772340991285"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5213093914710876"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
