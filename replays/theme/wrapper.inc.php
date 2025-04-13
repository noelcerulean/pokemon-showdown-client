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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6448521615844047" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.7670633411995964" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5337611334105794" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6886242612733409" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.2546231121593401" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.4705176991791882" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.223113775371099"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8611586825479702" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6637341140359547">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.39296782809685293">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.23443793573740357">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.05938319474447806">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.30062800634606046"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.266886953069599"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.5656307453362608"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24175595188765797"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.1612744947915803"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6221159155976008"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.1834251400998428"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8827648536729833"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.35615212663240214"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.24726265930246405"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.20633546295362293"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9662518486197738"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.2262054655709087"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6997429717282815"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.693262485647439"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8402429620070118"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6431653214490847"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5973397397159064"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8130410818527134"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
