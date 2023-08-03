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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7723587764343205" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.36231671586604386" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6212167769878889" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.1900718153341634" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5099482746649386" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.004309737693545701" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7364437873882006"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5090399085562147" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.25723940089946273">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.904792444857059">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8708140219531746">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6601998285897752">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.425017727136465"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5122661920844349"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.45042545936567757"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.20483896327799345"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7085694011105428"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.14548130527439795"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.35608825620578766"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.1610033917847986"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6905425502195734"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6486300527980369"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4376943590019413"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9774290529176421"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.11241204615221956"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.40672940708619665"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8813098172065381"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.3009519300131078"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.2837447990705413"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.4372879761982085"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6206029325524287"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
