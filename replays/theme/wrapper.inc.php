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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9105320344081544" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4535326142661469" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3823263630665348" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.32559088181633333" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.27805214635687614" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.515523742678563" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9034456180514054"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9775609518114137" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.923665635979078">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7470255685205747">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.993567428118797">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.06905082649983374">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2907468851647883"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8773489870853795"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8547651097872346"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6551643153376838"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5206793510046217"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.817830676064975"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6955678342036853"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8774445671258961"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.01521448108132284"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.35136267296862966"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.24982409453453158"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.2899302450213306"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.2244342922787934"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.533100364360753"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.13413614935986762"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.45740590953053895"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.007591645581893625"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6738264377178411"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.784168171319928"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
