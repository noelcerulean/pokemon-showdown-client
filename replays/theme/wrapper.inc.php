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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.16987405443849002" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8598703506470635" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8825888739330068" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3548303130211867" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3275548112534117" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.45870107243879543" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9308856469458104"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5324437708724963" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8000514110619985">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.05583623556138373">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8861096055535909">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8178202201661466">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8497443096938475"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.578463508169696"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.16615657838680975"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4962112613011356"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9178988633026315"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9621010290881242"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.019184481524262553"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2505387899112801"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6259971729222322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5826589415287653"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7770061434743973"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3047620196670584"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.09487933695978223"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.188366460828568"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4039731394006427"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7070712904982495"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.774381527833387"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8183178465155763"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6827714115107251"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
