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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.3092646441919673" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.8960516955107762" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.13311916979022964" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.7181835699252486" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5865783709536119" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.5188819939021658" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.4074574088160352"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8482762825197447" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.36232887844073325">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.14146967319207748">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.005790886260798045">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3370609819056365">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.31944656696084595"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7084488509317761"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.9229854386413983"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8528167620647675"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3917397644033864"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9843092290117441"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2104610997816294"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.46362086790904056"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.36672379015113865"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.11029365260474266"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.5478996995928975"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9064376915104553"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7598717989343144"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.607265197670299"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.4967891158866047"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4417348603270894"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.028390292770456238"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.10364787878926607"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5196862932172841"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
