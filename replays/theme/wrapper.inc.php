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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8222715113267578" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.33404018863286766" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6671716187998655" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.253740519163719" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.4132427591627217" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.488397756694797" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6726636555945378"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9897513596010667" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.23697321767685775">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6056218569873895">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.1688664614244466">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8408135655609743">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.08928965538241718"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9333580951584941"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7350788433204596"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.07726028612855673"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.30130158494871906"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.561782934332566"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.17673587044912775"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.2766473164038301"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.24381474662781488"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.4486099529910428"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9130855375212952"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7587144790972102"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.27274721038374716"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2638497074990056"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.1532173312155447"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9260754034068166"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.1707898236682277"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.4177157488969585"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.048658406891794126"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
