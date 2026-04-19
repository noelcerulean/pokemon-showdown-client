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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.2925978641309783" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.47391137731961375" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8508454460623514" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.871791064591227" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.21231200576337983" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8606469878660494" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5063392424896158"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9831801236099493" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.07604758876758222">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.131886456637065">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5884831715708951">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4420395820857319">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3199048891736882"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9263112311862403"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.1150987901213647"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.553685366138865"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.35370728851836764"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4693581681157022"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6103055172566128"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7587640463117271"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.8268081609480411"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.35770503153146094"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.1879098080710473"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6306378594474304"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6952991637313646"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9792907136663331"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4786265128251046"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.40675889331866966"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6396387448063023"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9462967188426399"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7363163146670504"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
