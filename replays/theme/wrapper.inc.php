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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.03723004509308714" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7489911679264782" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.04762670120375634" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8346491335676722" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.14134454620506687" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8423636137193546" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9322507517309082"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.876715046096489" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8286249465152011">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2568797420579112">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5987412988420973">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.14330684960156792">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7768989182265778"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.040989030245624614"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.15305899628243025"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.908950063342638"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8672316156383852"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5458520339142987"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3194557449203448"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.22103832798658796"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9746614176864361"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.738537011679431"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.1257087461380837"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8021868841658488"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.696502372273019"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4870382564828455"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5056420935194785"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.46469682974822923"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8081591396555874"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3749606497166025"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.32182392640546187"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
