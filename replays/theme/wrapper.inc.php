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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.051968649867141226" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.010495949436921226" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.3348966065564325" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6679614772651383" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3129584413731663" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.371341782596023" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8997526063328842"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.3158326044728441" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8417776087056805">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9751439681414242">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.19281233824134825">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.254756395604983">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.86419137442144"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.03042645555680168"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.1664179490973292"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6847965131139477"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8058330172786916"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4594055510213695"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.006767359757448466"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9273489235322108"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.38526255567168044"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4441916935336405"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.41995077980385176"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.09053862705133087"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3366403777658953"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.22162860340742552"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6931449025349845"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6554889893217524"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.12506821320064154"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9452049090521739"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3490852753771301"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
