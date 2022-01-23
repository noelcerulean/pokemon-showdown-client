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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.10343633186977219" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6287350559201808" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.0683706603284282" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8018456083698506" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6076219413808945" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.32194829203174335" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.57089607219759"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.12251971618406543" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9831907110227103">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.20658264311710695">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7992271202578742">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4983165897018482">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2801833100125284"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.533061467280401"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8415387983619771"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.16870253726955298"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8681265275862751"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7457654829624583"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.06689851822651205"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6232124791726217"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.173943475902552"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6105149012432274"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.09133215605999156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.22109195017038896"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7530951421689451"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.24960062266839"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6220131367794794"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6918288552013871"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.46684924962127217"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7776389129210752"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.21593636639583558"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
