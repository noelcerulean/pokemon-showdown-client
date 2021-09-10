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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.852485666615105" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.462495993781886" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.09670134848350886" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.08329444935537733" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7382660738306028" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4825814748908839" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.0615128021642799"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.18825259991775045" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.02991607419713649">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.25456660552774113">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8755057634022343">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.44360540090233314">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4551584595832443"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4491055570211562"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.31029108589229226"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3552910570941521"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4720079215747883"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7835425039374171"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.18276961079773546"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.15192136202655804"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.08692850099278782"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7620797100009613"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.37066442319498316"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8542551134091991"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6035331631188663"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.34301723167034925"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.679274127197135"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9505099102388055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.37494683326234"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5356085476049095"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6689689744394505"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
