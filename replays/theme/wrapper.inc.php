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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.02654663228712395" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9593069998774444" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4869193509077876" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.2848161169575478" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.028446578899709474" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5891903459359575" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.538740527102654"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8301760906937237" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7190941448683283">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.45275582348243404">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.35832089944560996">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.32158988437464453">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.10875559702652327"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.24191885647200428"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6045958683822947"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.31513070665206855"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.17691277299478592"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5770794071086627"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9100163383551907"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7349111770430694"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.47349586239371333"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.007619830268771333"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6677189851975815"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.20809753162264633"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.41668593371629936"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.44615890730593843"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9045481677402314"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.05814631063168796"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.49439818779193945"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.082580613595304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9031468092006572"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
