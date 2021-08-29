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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.2350694304905625" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6386928697057797" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5958328280324658" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6374734156862063" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7090159124854396" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.037682190113438985" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6418593043765739"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.10846086879825867" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8638613683627363">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8823783579318603">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8143124490512792">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.08647515238850989">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.37840171463079697"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3055069710978562"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8818135034922232"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.41927573311616295"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4369816655332861"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3605387624264058"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6181182478006091"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.25868576778499586"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4996430445120341"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6326876413776257"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.17841100120030773"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.13001879168434716"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6149949513291508"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.03559109063012866"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5981041255602149"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9613564489884083"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3853008810639085"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5630755445992193"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6180134325713145"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
