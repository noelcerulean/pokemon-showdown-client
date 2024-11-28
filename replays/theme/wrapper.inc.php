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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8990108295940353" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.44662425266560035" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8019690929176573" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.9292078404557751" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6756898818263961" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.22042172842928598" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.12099427470591251"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.08103384923427925" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9543327083974422">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.338689412117096">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.32013415687721714">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9291782279588781">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5905715427456661"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.680986861065715"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.35657481951595327"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.013268585536366784"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8366466229849161"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.49548896196187675"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.08230730793075702"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.34863605468542613"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9602036148387492"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.013828835926334104"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.19970998419356434"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5709638160202515"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.001303390308103447"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.771728794991827"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6160306150289012"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.877008643306264"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8564086733570815"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.43507281917625185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.015303101259254381"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
