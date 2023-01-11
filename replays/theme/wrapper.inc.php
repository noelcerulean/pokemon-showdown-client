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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.09075254416486445" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5005524771728005" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.42616021355050515" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6267316701376651" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.924199239324691" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3372697954734507" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.14997012758100126"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.1464370886387747" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4873675703357272">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6139491519771887">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.31787701722311645">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.2910177143274084">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6422348914380573"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.07302868196680956"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5699153129210375"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5526694125365319"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9197400770687936"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.46229470537112793"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.08484751385589329"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8339788572046818"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2558386929921934"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4293442936192202"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.22597218551961284"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8524635499560902"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.266092617058417"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8411422117806051"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6407386322035089"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5670678478073279"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.31228357314446886"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6406654691532105"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8372651625613916"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
