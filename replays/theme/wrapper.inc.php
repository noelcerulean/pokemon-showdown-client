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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3334908129748526" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9991388186833645" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.4241494862607337" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6487270841611488" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3381908666710679" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.25204976649452526" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3399800365389023"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.13109245431035077" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7451206186227225">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6107934727693194">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.8937122553298695">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.13389055189372312">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.45250209670435815"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3000717299294364"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.25653713879518303"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.22377779530583553"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.14149717840517662"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6236577643297735"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9510112148200616"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.08562773150144098"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5877335597379967"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4363169577776498"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.6551549874702934"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.008736227738430524"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3305383851307939"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.48804726187178027"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.16385328844783664"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.46220828747302245"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5602756518912042"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8575102252521497"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2657257397318312"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
