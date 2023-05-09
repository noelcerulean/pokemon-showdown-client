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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7979411712502178" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6407744277590202" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4425517437179254" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.11291847083074824" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5758743280591896" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.0036509704864653436" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.015891384133326136"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7561043228165527" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4448542242770175">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.0595893558067766">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.781745041954353">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.933561106032256">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2820039312006677"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.24805564866338714"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4368361348274308"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.19724349778387262"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8324995677474847"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6876550127824925"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7467214885355749"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8276624515467794"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7925483762169923"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7208541191870736"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.315626756581461"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8935943900285193"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.32873187966822304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6747607124709241"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.08441292356055108"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.31442855734932085"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8065245801593759"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.23558028148673804"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8470407924056294"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
