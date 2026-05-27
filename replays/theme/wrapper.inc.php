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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6088777920386366" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.12147159459598833" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4491242124898249" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.13885167912474605" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.030471007686851737" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5697115313372867" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.2267517652803952"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6666698462764757" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3270163252338465">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.425421784613222">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7676250915322591">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5449363160510401">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.21730345144707197"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5577908991453795"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7992082191392804"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5513427031535232"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.27336096962789824"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.24883520204089393"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8784739499292582"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.27577133187263647"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6131402526767242"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5884250760088519"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.13851227291214974"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7111127394558292"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.11459368847272211"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9854021478067385"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9381684145172156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.689404932819002"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.28604257545736744"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.31394441849275645"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2851469896774521"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
