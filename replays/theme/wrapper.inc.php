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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9870246143388604" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.18151421876671603" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.18220925167992852" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8431666898744754" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6524732552725707" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9030178300994043" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3607969416648409"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.05253061187231234" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7632063116448142">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.05872973851244678">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.1451662672924332">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6343532243146821">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7382867607766117"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.20539834161234194"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.43898677544628883"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8725538978651524"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4959859632770558"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.46404479044700464"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5111725977321633"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5660304301139998"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5938224244161883"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6445884322171964"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.516168084527703"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6665343695818218"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5601166048467283"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6042486128611266"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3925042681674289"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8596198721121668"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9970572326935507"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9567420295246818"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.09730292262056262"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
