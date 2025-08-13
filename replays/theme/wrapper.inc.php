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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5731641064208302" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4666273640845513" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.1980114986628596" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6379822374272706" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7206409171222454" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.40120285638129505" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.36729365623668864"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.1824184758609817" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.30877414334080555">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7656141083104007">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8818300279294935">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.34264033565615937">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.692426804122783"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7742427740032691"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.17632321749553226"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8919611048198093"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9445297982179308"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.27570323043495804"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6570787576179336"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8397975230448336"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7793798117490411"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.24990525026866672"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7973219400184024"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.41530485158286545"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.12054106248198382"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9846158663374287"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2878895604069269"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.13347561265942165"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6841693840648886"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5136852332187378"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.04496910010919675"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
