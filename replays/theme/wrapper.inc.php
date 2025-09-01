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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.40538795540763717" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.31810341071609316" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4837901952870367" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6919805535929078" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.30180818203217497" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.45341843760555656" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9596278429858187"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.03943092172532281" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5126431568331047">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6106014351618501">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5084929006414745">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.24338628360857428">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.540460492589369"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.40175686161977087"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8406247178523918"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7086493989935654"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5848761759177887"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.36549907794907677"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8602898214316583"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9664241628734007"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5806133449066249"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6498008694578192"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5581527632189907"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.788085446237597"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6469700200307136"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.27112736240184465"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2770120679005763"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9416705307440421"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8093230094900974"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8315387865900299"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8912590741419071"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
