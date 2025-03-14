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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5688586744086404" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.872497162182883" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2334859917152281" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5148270611344061" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.10710115888775285" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2196545156662395" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3049244197867116"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.930187296159116" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9315785534362913">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.10134495499836427">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3501767731195584">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6557363157824383">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8152741411737157"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.33951486717309587"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4299183973650922"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8532692056807478"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.17077381901520394"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6570191802058833"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4151461020865077"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3576942206797429"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4664661021607839"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8066351276433898"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.12254019374704739"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8776287071182656"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.33334549267024527"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.43568585554594397"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.0938465757525635"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9181885255985878"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7800992972858911"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6000092873015483"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.1731305655498887"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
