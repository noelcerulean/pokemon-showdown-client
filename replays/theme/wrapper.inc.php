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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8301242431877589" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3825714808298859" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2054803976374604" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6687049858055338" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8556652388775599" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.7158144447084482" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8915826715775106"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.4876454099269514" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.49732135595815596">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3269873038868163">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5612568423595283">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.02754209707090971">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.21847531167398304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9576368060783638"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.20681166194056466"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7416283469884666"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.15160950268435824"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3586641255635614"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.566908946374096"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8787838416283713"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9005143155212099"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5267878177773146"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.08691566720449928"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5783878585988991"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4593948087631645"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2016259218042833"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.1691515954635434"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8152172306478926"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.22792157607724306"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5829495786881123"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.11308606881059924"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
