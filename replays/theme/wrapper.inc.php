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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.08878907590431284" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9271961894776266" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8989095827434339" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6812190586462088" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6826152684031161" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8414811900307726" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5760451455773634"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.378817337053875" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.899911652285428">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.16372188155104284">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.16784928992545245">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4031432141307778">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.009353913209319664"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9064409199014696"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7495153348605621"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.28456248306157983"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3705783681496675"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.503354500449769"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.11223933228432403"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5729786226558282"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5176287938776953"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3284308026666858"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4181167760953295"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8194410721103347"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3328920528136061"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9268988863186018"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4647062786533991"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5766516961757346"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.903070331679168"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7546829830429338"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.335604721664557"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
