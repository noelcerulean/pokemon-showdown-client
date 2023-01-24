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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.23233224618752435" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8295132662366769" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4980037884624975" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.18453723383270382" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8415373001156257" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6774095693724766" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.1299713082875813"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.39433847780379816" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08375803417511207">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8871459451505683">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6866013229295349">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.01768973858556855">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6562186538938988"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7868798272866668"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8869120541523516"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4565954648991979"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2846115674835654"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4863137305950256"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.31434373783768677"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5541706838883804"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.37920960630704315"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8699119326178826"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2554301017715872"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8383317335064286"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.08824271029230335"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5864376230954151"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.34115658322409437"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5557024847733714"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9513492782703123"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.41073227903116716"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7978288338357487"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
