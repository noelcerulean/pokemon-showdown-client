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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.23207868949484167" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.10805717565798578" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.915503357825153" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.07953058447249384" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3131664610293825" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8140259478597298" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.5978739379236822"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.08865265541602119" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.44721805945132087">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9330665516032479">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.1995097024824719">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4386727425787169">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8046230741968874"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.88193766607202"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.455616634626844"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.23126526843698492"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.08556715885223265"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9146073781597226"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6685591139298614"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.12795607827978928"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.34205268158902524"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3545146200635443"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7816688741055402"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.10327119040762223"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9617653061916507"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3907365241875762"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6541229734536684"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.38834400479612197"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.038670516558714674"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.13448456343289927"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2371151555423332"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
