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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.9745483170310807" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5398277710211465" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9622638845449674" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.48209667534368394" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8666670699058097" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9384718344239744" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.3663414046946949"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6427370354013013" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4546245993712814">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7822842712840647">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6179615417848601">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.014380614213534315">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.779983562507415"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5196203296196036"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9915903506046833"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5692126645787743"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.33043887883949297"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5438828832043734"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2649188770403308"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3215931182382472"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7591489347792721"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3320729457892295"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5259258830746041"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8963895099442296"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6440857384443466"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9025203765208281"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.10356287351606652"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7132077566861714"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4944766548024093"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7332437577269231"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.40920694818932635"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
