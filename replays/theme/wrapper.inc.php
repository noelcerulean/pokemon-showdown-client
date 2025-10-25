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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.42808144485939836" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3537552671418849" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.24995518144716167" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9069135847274425" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3155472907559713" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4738220878079171" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6894092084673487"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9686520391997566" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9225563610235659">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7117397402792962">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4706403177187568">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3115647442421272">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.08070947372502801"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.4288467423232205"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.4294808006740045"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.19390275403758128"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.22906010176376856"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.22784688385601193"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.094158303424144"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.17832375313514182"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8793839014310074"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6342046777185077"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.09698931666226174"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.3105815598054189"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5242253324932253"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.4836647149076314"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.637721940240358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4372611899761467"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6443675049900239"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9930329570526089"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.24040989917103528"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
