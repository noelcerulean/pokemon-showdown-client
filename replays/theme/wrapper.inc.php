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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7985609676433643" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5130105806439473" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.19791883116748288" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.526582505175861" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6129677484568448" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4577955524863726" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8913042610321495"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2730822362762939" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5541321244672381">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5372789212130249">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.631587940266823">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.1071368694718271">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8881086528302189"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5764067674633404"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.07967131058305821"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7314205452932012"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9903285889255184"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.730825065488192"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.23896080057214975"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5901782592672917"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4101156903278025"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7220518920523826"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7273958223300374"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6673057862689427"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.05880810316754914"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.37324261401591086"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8375300797245626"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7669775847979041"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9017761894106067"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.26652054801667724"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9527147193533727"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
