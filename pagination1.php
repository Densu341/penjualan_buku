<?php
function paginate_katalog($reload, $page, $tpages)
{

	$firstlabel = "&laquo;&nbsp;";
	$prevlabel  = "&lsaquo;&nbsp;";
	$nextlabel  = "&nbsp;&rsaquo;";
	$lastlabel  = "&nbsp;&raquo;";

	$out = "<ul class=\"pagination\">";

	// first
	if ($page > 1) {
		$out .= "<li><a href=\"" . $reload . "\">" . $firstlabel . "</a></li>";
	} else {
		$out .= "<li><span>" . $firstlabel . "</span></li>";
	}

	// previous
	if ($page == 1) {
		$out .= "<li><span>" . $prevlabel . "</span></li>";
	} elseif ($page == 2) {
		$out .= "<li><a href=\"" . $reload . "\">" . $prevlabel . "</a></li>";
	} else {
		$out .= "<li><a href=\"" . $reload . "&amp;page=" . ($page - 1) . "\">" . $prevlabel . "</a></li>";
	}

	// current
	$out .= "<li><span class=\"current\">Page " . $page . " of " . $tpages . "</span></li>";

	// next
	if ($page < $tpages) {
		$out .= "<li><a href=\"" . $reload . "&amp;page=" . ($page + 1) . "\">" . $nextlabel . "</a></li>";
	} else {
		$out .= "<li><span>" . $nextlabel . "</span></li>";
	}

	// last
	if ($page < $tpages) {
		$out .= "<li><a href=\"" . $reload . "&amp;page=" . $tpages . "\">" . $lastlabel . "</a></li>";
	} else {
		$out .= "<li><span>" . $lastlabel . "</span></li>";
	}

	$out .= "</ul>";

	return $out;
}
