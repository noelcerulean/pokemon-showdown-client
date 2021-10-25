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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8538641986972186" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.16503809189785668" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.47959560641817855" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.06467369220527708" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6264968859807079" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.41962907999000953" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.855703361335739"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7988333091555078" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.22837533707561475">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.046880600491463476">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7617785881546089">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7970367684198127">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5027672721701979"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9319641153175846"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.27237488869652626"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.07962438431691443"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9593842794456757"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5634350114364683"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4982335689337376"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.05304263632068862"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.014424138545067633"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.09298468842575858"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5331462156043174"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.47904382882426844"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8765491334400481"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4390966792997615"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.41893112435806823"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.2145071242672414"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4372415776485863"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5534453190200213"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.22385142513602907"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
