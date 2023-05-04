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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.826808734468053" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8965129186425624" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.21608519622740685" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6276506718665855" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.3931105078049968" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.1916115232784601" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.9541725674264225"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.10705898615107068" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7839836066700707">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4178633359887225">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.710486184645647">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.39989503904611134">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2867056852411143"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.3980980267876457"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.2945561892781057"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.10796454042849302"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7965875394413184"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.616587674984443"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.12135652133390806"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.11894030716773552"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9942460059628564"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8807698495482619"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3058497094041328"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5215622385499434"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.4882526058778065"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.38354606707328753"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.16395046897863552"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7347397766415706"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.39488207594326297"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.29029543107341516"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.09566691109562764"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
