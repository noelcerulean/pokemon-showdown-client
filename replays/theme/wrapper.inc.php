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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9720029002661468" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9672235212674967" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.13222601199104167" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3837328797642381" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4246338826218228" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2547289504390373" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5890593208853643"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.41856953355870474" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.42084176388743644">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6229615955990029">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7800981045926974">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5397674827271761">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1902689324631539"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6392767546871891"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6634278571090355"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.07633770722002975"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3095788904982193"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.38270512092738196"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.03246929075890104"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9907552693421859"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.18779096286493857"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9426347300792914"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7182626084613553"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7331999526401354"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5538445122550972"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.23301888157772033"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4056952976172816"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.09687236169710234"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6053707478252577"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.42046343236517925"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.943103075125028"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
