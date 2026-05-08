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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.923762154844362" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.842191428713496" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5924422351092755" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.20372026603708115" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7705948831438483" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.00796985039870357" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.015829058019839914"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.18809738295423295" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8383871179738249">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.41836769022843434">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.17025585015483946">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.47635915572261944">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.37198949482594235"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6690713826106389"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2404458271327492"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.20108886330738085"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7684728849234277"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8721378038248655"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8058552545012789"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.0014857134842529707"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9107786598714598"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6560066112905105"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.804673971215355"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4077184211620921"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.45931849630612787"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.87884080272922"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3755062768745405"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.07477862573871086"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5830001711053292"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.10102279473935716"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.40982984194308814"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
