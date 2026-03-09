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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6623169724135829" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.35953818250255276" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4988092827673438" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9414456871923191" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5422462245396946" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.37802518675070695" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.16989311641473148"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6183224720627705" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7503028461505783">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5363635826334554">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5991023555437096">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5200718143946619">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5397028430967461"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8348830764597897"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7805147880515926"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.18878080051000112"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7451005322558482"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8374880964561358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3696801916087087"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6837439722428291"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8493261527174563"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.544798492023765"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.23474662658357448"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8278515806923417"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.08501600949536336"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5604483230643404"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4397535222414304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.07457839557499879"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6712069252102448"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.11127944511683041"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.10964139351897262"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
