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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8021915295950044" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.03064076179640396" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7028245299158409" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4470562666069915" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8973444868574338" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4358850681973927" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7848371578241156"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.409739471786021" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6222817000274536">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.042930720993467064">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7455488645579964">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7851739512420395">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4937058732591266"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7930976731777528"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.33317421382763013"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.472363221775721"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7537584217797437"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4100608606302638"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9721694369504572"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.498862974193947"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2084554070760707"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.12488083032118458"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.377195273603647"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.36187125920748886"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3929591591961552"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3669580695196417"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.14592076661030884"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6632287285219791"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.025655453099424408"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.039549666121688976"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8799080763985199"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
