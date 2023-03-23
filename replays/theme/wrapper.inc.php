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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9561400303927832" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.08507061625308121" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.404471579258173" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.21130851112714755" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7463588633151275" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2975674593547697" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.24315474043240393"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.004487806560347973" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.26416188325944767">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.295080785196286">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.886424293171794">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5506974633827824">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8744386070415247"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8458694869977534"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8948286633288671"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8884425009190664"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.08978772937528356"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6041132729368677"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.719265843033942"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8635864255866901"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.41198433017016445"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7883095134362548"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.14623731646673477"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7032427008501336"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3584986676844486"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.007469168937284332"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.023970885226332506"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4720830316980942"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.26888945427587396"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.45153299700207583"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.28828233413264326"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
