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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.11389073674917038" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.07815827451887292" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.343049570437437" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9106275638604608" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9853993964198238" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.50489122612139" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5717890185248025"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.60357064457614" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8939785865233834">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6368853884387731">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.922598442059829">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6286959572891149">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7307048997936443"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6454891854728302"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.06619287224695625"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9170842613285772"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5706017502352929"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.02159517878955941"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.634859705845596"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.13595801862378343"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.06214625371034055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.7688156263756931"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3039161595313431"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4130014035151497"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.31925421478388216"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9387320020767949"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7064505914235866"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4859226015032734"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.26881665570147817"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.043768310687008594"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.725481624882856"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
