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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9374333946028734" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.2981873037076441" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2574310164401101" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5603603733529692" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.15375899234254908" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3908781764325462" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.7846296483502675"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7461382242897157" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7160901727875415">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.723476969357824">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.2921665034647094">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.16727386097165953">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.37579798706682666"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5109052398123828"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7230397890811024"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.980771035305902"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5530830396384485"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7500936642810392"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9534188180761978"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7081304198899343"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.669978727980955"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3083848134737168"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.22646878498265988"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.45028865537768037"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9720755454146794"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8891116865042383"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.10809838814287898"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.1506234252587535"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5440011873736259"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.041409928041342026"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6264914431294566"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
