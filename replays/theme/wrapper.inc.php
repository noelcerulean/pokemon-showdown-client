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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5547311544984368" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.1668047719448984" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.08315702619619625" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9380700364112378" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5316058907114656" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.17247823816022256" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.566850686994542"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.0055137557568443185" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0015921071688327348">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6051060687336041">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.29279194048337454">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8895173313418561">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.25709472996027594"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.22068817638644322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2440916634278003"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7524065704173724"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.14636002275594207"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6992601560935612"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6268196357457638"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8722885606033712"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.23422208651897458"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7404718814438378"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7276962083713365"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8648819749600469"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7385752025035959"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5711343224653542"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.564244836257491"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.31664601866251885"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5802311105499729"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9917843604348959"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8380174338379416"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
