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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.04655862941867683" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8865137532214897" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8390430509210087" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.1839493639677332" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5106288769241469" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1531782795668386" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.24822528381946607"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6467874931091802" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08549220114025813">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.24029118472194888">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.2744918382457291">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5663831137224511">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6251769618548948"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.538385715871059"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7392849422065984"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7930870054220218"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.2827213099920962"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2495917959653109"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.580341325644149"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9128036810322273"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.14628664791151857"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3427929408493027"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.18996134496997485"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8437500891163512"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.13026985990363493"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.5233119114689422"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6733239930767712"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.48028782911753387"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.1700285659976828"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8032543197348532"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.0904923607851913"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
