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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.4158076383878184" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.45215144690920983" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.89252710240322" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8375110932902237" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5514003928748055" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5803853049214913" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.20316781743611223"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.021187382739688454" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9276600908878982">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5790749174368288">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.48753392954378527">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6423178075924769">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2343239650894955"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.19279607328836157"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.36653641958198624"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7774293029432111"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.745770828904518"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.11292092736234616"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.21980757744980428"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.1092113551430447"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.14030110852558098"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8938978746480313"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.4611119857140087"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9560438871304866"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4394470391780285"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2053582297281351"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8652975081527343"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5774571275145923"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.09653846495803275"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.2823540881119755"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5700233881721086"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
