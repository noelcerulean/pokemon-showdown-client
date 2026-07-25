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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.28218097212141036" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9428322577262709" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.039795363002074424" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5518894745722369" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.37237880759644515" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.785657180116988" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7444596480932038"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.18159608253531534" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7835447008252896">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4410036308956393">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7106390062832846">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.23945510027512573">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9792151982201269"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9128604150908934"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.435873208817696"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3010289423184689"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6876168933283757"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.40063662618913387"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.569619927215639"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7772344582375463"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.450027840269108"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.24566406532242802"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8393607862357053"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.35218855094533863"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.07512493429109024"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9288577609038355"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.36068876210738976"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.21932107663215383"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4234062470916089"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6713213918750025"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6685910730580442"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
