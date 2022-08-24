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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9206185380610428" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.23003364695637707" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.49756570820826895" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9555496802164412" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.019068903812516247" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6401578577320981" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6916467054093134"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6974551232465456" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5799641124816592">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.34856504193056836">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.3262420440004685">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.21923282119808296">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.32370152756097714"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.03866510239549559"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3112694120874906"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3843072821245781"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5966301809284853"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6740346356832756"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3926109451339621"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.011192177805636305"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.6405145850288503"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.36181282891298383"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8493530927376838"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.1978556771466491"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6401763298407726"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.012113162486701246"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.902805838685433"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.030696259746650245"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7855338053144825"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.13017176816631415"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8071613492939342"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
