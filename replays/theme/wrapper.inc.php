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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3785353100748394" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7785657711530345" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.10385855898775365" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.43022831710812337" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7469477409081675" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.733412792360685" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.859405857025199"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.19733361400484806" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2877645078932083">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.01370578663157973">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.15141539877341215">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6821100171068903">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8027514544604717"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.885409773192543"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7525994700870766"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.542514045203111"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.07748047710185246"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4571969417109374"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.16492263083538106"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5020985453069031"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7630607382861749"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6861089377098424"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2726537181291848"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.34367462879718724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.46664731449271035"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.21898711869044862"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9786156071333076"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8978086893324388"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.27270523947716185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9716952260489247"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7577287540404589"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
