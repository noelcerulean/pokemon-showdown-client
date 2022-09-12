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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.07098639874323753" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5626387994839808" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.45103692324906564" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7155540382095911" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.7597024469325024" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9449659011954963" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8882131357447869"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7014793907811208" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.14265268502824102">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7437640621644481">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8226042131242184">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3962230727187588">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.1569208650971372"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.12455979858003108"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9524857719058129"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8635413875531939"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.17793035660696943"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6470508972280167"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9748178057563197"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9929897347978249"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.21665730365181535"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.027614808794041767"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.09997596312137769"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.2604523134155712"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.02271453984887617"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7514228257941986"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5481301890095112"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.12565987377528653"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.78382437155526"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.09804605767288521"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5047370570376253"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
