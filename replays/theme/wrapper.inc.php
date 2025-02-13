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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.24921808468243967" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7327865331960133" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.11479837876694443" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.1238597302028579" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5837802401014613" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9704801378374979" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7370406173531223"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5830975554891937" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4434456044962358">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.658381020787814">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4478116834901287">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8210593499697922">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8298367806187756"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.04853594776800185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.05323408066061108"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2838253124585022"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2681186206959272"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.06472326656893812"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4199315606134657"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.25135054964932824"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7045803812931466"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.0338107331777493"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8400787617857219"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.303421446132915"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.25541256170364335"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9455622429375914"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.472381328987981"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.37271104267732813"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.30392878236730225"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2998042544791879"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.36998610188100023"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
