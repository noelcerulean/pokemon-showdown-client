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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.14287860707163458" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.49329682162892374" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6269265388353813" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.49743886358688494" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4985327276988192" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9076987395983569" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6012610263084306"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.22011843785612673" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4452768342024027">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6447425990663342">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6377559265599952">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8562018710620798">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6052639347060207"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6719123040107418"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7979117607229165"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.16380313489697085"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4795220640616442"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5489376632794005"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.36534698854986525"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6616461837575154"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6275400315658524"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.712222426933095"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.24743678125796587"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.20101091008296246"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.11520541521061811"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8435329170801795"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9620968386375413"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8225852191369436"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4236970286155022"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.42179510979808077"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.838764049674106"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
