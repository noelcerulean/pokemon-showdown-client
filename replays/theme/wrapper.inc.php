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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9234934603443266" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8482834606411258" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9993531455230211" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5191205302717725" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.48694646712139456" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.42724711689150996" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.24305918065101295"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.016163389886631796" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.07887341741929976">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5898510846640757">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5374534179713562">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.17892792231714383">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8782357296675574"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.23017787559137792"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.17054151816426755"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.43516057642922834"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.545305229416108"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.17889723610271813"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8807036015799925"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.287246408496475"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.10361584391640499"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.18379193358622858"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8741068739018409"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.03504168623759463"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8702858732839307"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.46018095500303624"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.085309236695847"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.2419099053172895"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.12854957991596727"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.696438990207209"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.520974528043866"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
