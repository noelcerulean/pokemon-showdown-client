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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9004174517929204" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9627098976308464" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4000425891078787" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4047465284823555" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3980162609662099" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9729665496511752" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.0047921677077074065"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9975837503143397" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.13258527203798276">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5002136671079305">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.09091397687990854">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8212553586156657">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14514373258072522"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7365368956675151"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5905119248455697"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.35557752131957154"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.19577491199516572"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5909218780579861"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.01680667748912712"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5253796677367792"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.28702328134411736"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5963058879769143"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6468720977515765"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.2355198866971402"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.39974093415236167"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.47863580314457477"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4196950754333608"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.1531594054608698"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9796169654225491"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.05666933371110172"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8519474483628975"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
