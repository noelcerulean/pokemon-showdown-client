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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8590173715385341" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4421521984398866" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.43865321324059736" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6482601932058334" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.1550167734107355" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.0760220965260221" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9625111533063742"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.454464384017649" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.47769868023682927">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2791806801212098">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.23701441363473852">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6749269771910835">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.39370405146741194"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9171503944306785"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9393648498114999"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.04260266588317996"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.13868604277857433"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2824086403181092"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8656327381344078"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7016539752042321"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.27721871852277746"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9040283048639892"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9837286892804697"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.04129136640744124"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5452385520676357"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6903155081637784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.10892643072068187"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.341624258171382"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.1722617598994356"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5412740642152967"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7973560591169826"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
