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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8372935989814376" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.16246745748785107" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6628495857573102" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.1620665385171689" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5393276265177995" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2926835909043959" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9368791799845435"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.24849302817790497" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.41055854843642825">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8507184457555752">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.13417906432577142">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.03694652900604534">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6554735362912274"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6756325970897843"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9034495262661539"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.0014213676972094635"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7162845508633948"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7082864056889349"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9623848145474083"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9527140487510564"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5084981357634133"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6814422457159215"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.17338418971654823"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.043673698438209785"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.08241512735162937"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.06735885843496048"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.1718030198754561"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.18990600590874762"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.0497814527926852"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7505614739038848"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9720947985804553"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
