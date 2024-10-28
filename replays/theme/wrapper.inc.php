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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.09925225590883113" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.194115692555892" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7988808026319685" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9779778753552331" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.618578393253399" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9975432880913238" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.41280198500417087"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.22938593304360988" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8855974309313386">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.14385092112308917">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5057108733231896">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9118321299477763">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.18571761602757886"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.38581879629693194"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9799115320591345"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8949691639327348"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6064555070032416"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.12146191357901315"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7618006800141146"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9118341456358372"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.2852483258733767"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5256899776726467"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3758220298335446"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4676705082519239"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6867757702059181"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.04427013697009774"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.1911344027243851"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6615482060592688"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.16760238414763928"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.6136318588005427"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8032414290653835"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
