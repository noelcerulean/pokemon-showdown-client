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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.13409014937919417" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3117250033942047" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7824854430770021" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8460984672499998" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8265098051036981" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.684653597088511" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.08811836427323061"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5417895556774759" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.12915143238942006">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.10853155721683283">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.22162914387449062">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.14080775133313383">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.34336153199875796"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.05989712323960461"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9683380943439304"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.23921069761307678"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.8749359944527242"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.19285486061148527"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.41928512135032636"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.8705983780511042"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7924351093034832"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3671080218488165"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.3524510623496755"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7033916357059666"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.811162725795679"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6770288752902287"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.36740937687708275"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.20719179806057664"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8654578582111232"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.06677722633340988"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2773125816228923"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
