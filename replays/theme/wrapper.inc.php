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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.38940470244100145" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.614132465309644" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9097899302729395" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.24449316192311277" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9793752640413929" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.29164237460325615" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9304626426379761"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.40632710448426423" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.049903576702442276">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8307233678225254">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9221266752504114">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4003841126208969">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8654821328811217"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5269916341769634"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2515254146910981"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5673726013413023"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5941436631929413"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.041296722230871774"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9171434008785662"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.864353208391013"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.09197713435494292"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5916566093132749"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3397135539165179"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.41834767656300587"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.15969122436622896"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.019402894684191097"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7842064969441322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.01807699007350272"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.03812203073775233"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.13383867551177486"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.03288306478144665"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
