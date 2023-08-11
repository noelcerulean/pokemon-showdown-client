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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6257508507261762" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8444812055661044" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.18379501582934776" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6807537495174079" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7295738735952773" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9813573284673924" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6276568031487149"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4084110497963962" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4182387158260277">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2763305032304435">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.10093584120262289">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.697186103588255">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9063029604422665"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6703605586174299"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4641070614168179"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7551639210451313"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.824671911308978"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7274494955599287"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5755864356142895"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.244573365896543"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3652288842604947"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.16983321709630217"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.49062002245942726"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6898670077648754"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4416950624742102"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7451403733722839"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9948564998301501"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.47181728139965795"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.96682243882607"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.22770043695797693"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7911938462656807"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
