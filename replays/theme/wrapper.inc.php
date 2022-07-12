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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6187283211277055" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9811853587173591" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.04383080380330462" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5710983733396278" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5231988564990964" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9944733275735509" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.40447188771000486"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.25663040237213" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8338084161761925">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.02023036122303612">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5405387106465038">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6547718238180682">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.25373606991218556"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.38027972271362476"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8163045576504755"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9081526221120748"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7213290334566136"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.32676327389231075"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8611896296376853"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9384971259008899"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.887787557879457"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.626872384684132"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.19185429165693546"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.43506491092518296"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7872020713894661"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8950394707633724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4562757426924082"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7417575326047121"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.0824811291835339"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.12528115926500427"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.503923976819616"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
