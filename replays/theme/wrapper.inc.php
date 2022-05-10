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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3558933918528391" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3352839077653744" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.009319311321133172" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.07861951160823666" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.21380330667571434" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.168268685010855" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4298564734115502"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8391270133608888" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5997154868032186">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.14219014867789936">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9364325191603682">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.12975131483765123">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.39420326538593575"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.247999129178627"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.8725605630139868"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.2645180987528484"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.618371011039089"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.36814779218619686"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3984741747580669"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5039648680235815"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.21804270931242953"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.31313453939899083"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.31300416209167214"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9658074338071312"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4925827798571838"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.3768566741476391"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.21540560259853048"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.0209308052561461"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6244400356158519"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.08047325075561318"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7720038066052515"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
