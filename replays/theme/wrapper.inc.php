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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7802261360801466" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.05479089645410773" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.12708603274030716" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3237122876174312" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7393268118954064" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7501659614806389" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7441945987772187"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7976306317010811" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.48718107399659205">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7957352973525489">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9072863307103054">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.38767281211075777">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4424623224042279"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.34396973739396763"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5946273437916196"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6123924688194609"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.38379125610772236"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8893883364133832"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8838533627179499"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6179428844975734"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8144286480017848"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9509657310513691"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4673377669814385"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.18711562977025364"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4013827138198114"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.34312345038256065"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6064500409841254"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.18304334688074242"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.15631528088078572"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.12830807549361944"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.1919369967623039"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
