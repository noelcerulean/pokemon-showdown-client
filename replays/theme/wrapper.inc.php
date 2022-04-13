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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5405477410588848" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.08057337725582858" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5327122316788968" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.08550590700970107" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6096459634971998" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5994155483813153" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.19141163881220424"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.17917615439591428" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.39625638429271204">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.888565262703799">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4568631588421501">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3963217674625279">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.79381046943045"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.04815991320012358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9780917451849349"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9472682497877973"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9778790411989451"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4774249135205888"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2118705168025361"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5772065966271513"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4554012796935869"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2805330308757654"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.037220267003157836"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3560437063930393"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.672310709368154"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.46755319858636835"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4583249906895077"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9069136282453547"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7024008253055194"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6976247920762513"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8969355695200163"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
