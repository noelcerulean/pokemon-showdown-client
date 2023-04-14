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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.11446041484170544" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8578652236001918" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3489433077710611" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6649434757139987" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.66311733177203" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.17954292057622045" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.008117857448794563"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.1897090819881313" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.27850383044434013">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8261718324556879">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.15256031753508315">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4240447995244321">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7947582606964299"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.0718779217526202"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.13370561374400625"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6734579336984261"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5056413482758146"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.05812014823990652"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4882143677288755"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3718221398101982"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6481916337430909"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9736883656651549"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.396447208626292"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4953791959839129"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.22527147924087543"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.552830671418886"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9560842816363317"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5602568342210246"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.44200838102965556"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5818607112144467"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.08373927359248445"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
