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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6575399573330676" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6603713247677061" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.49211400590456655" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5009422697050667" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.10876749740918501" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5248699326625872" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.42906605467354764"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.13032910732715353" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08553878657314251">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.13783181828336888">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4635783731940055">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.25396848697322416">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9656715097937856"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7951112379052492"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.768813844964277"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.16326929934542167"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.07432782561895657"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.039410613880908496"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3135398967822276"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5138110936891598"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3041964313351986"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.1374013337664508"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.20711497774414855"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8374985159889685"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3813899172264832"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6045885295652846"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7302564687979489"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.24809373901965737"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5558869891098801"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9236469705246457"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8902325042814321"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
