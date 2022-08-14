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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.11219184174110142" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9026744084776517" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9405847840960655" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5355067992522" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.08372288043428866" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1748814213741292" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8912335473799462"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.93593694618007" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.12910022339703353">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.39542873747916496">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9942406093192093">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8840890498535798">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3006073609607358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8008953796818319"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5986906405022026"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4284807713492036"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.26698812128244676"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5460969964709128"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3550303678338542"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.24633990891390445"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5537668355700576"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.1790469433287034"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6727397498567664"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7485317282574862"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.11521924233307956"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7545394170045641"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3393444467971407"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.48250841184172"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.478589814094724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5542474449073249"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7415329565748485"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
