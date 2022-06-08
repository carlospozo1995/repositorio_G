<?php
	function paginate($page, $tpages, $adjacents) {
		$previous = '<i class="fa-solid fa-circle-chevron-left arrow"></i>';
		$next = '<i class="fa-solid fa-circle-chevron-right arrow"></i>';
		$out = '<ul class="pagination">';
		
		// previous label

		if($page==1) {
			$out.= "<li class='disabled previous'><span><a>$previous</a></span></li>";
		} else if($page==2) {
			$out.= "<li class='previous'><span><a href='javascript:void(0);' onclick='loadResult(1)'>$previous</a></span></li>";
		}else {
			$out.= "<li class='previous'><span><a href='javascript:void(0);' onclick='loadResult(".($page-1).")'>$previous</a></span></li>";

		}
		
		// first label
		if($page>($adjacents+1)) {
			$out.= "<li><a href='javascript:void(0);' onclick='loadResult(1)'>1</a></li>";
		}
		// interval
		if($page>($adjacents+2)) {
			$out.= "<li class='points'><a>...</a></li>";
		}

		// pages

		$pmin = ($page>$adjacents) ? ($page-$adjacents) : 1;
		$pmax = ($page<($tpages-$adjacents)) ? ($page+$adjacents) : $tpages;
		for($i=$pmin; $i<=$pmax; $i++) {
			if($i==$page) {
				$out.= "<li><a class='active'>$i</a></li>";
			}else if($i==1) {
				$out.= "<li><a href='javascript:void(0);' onclick='loadResult(1)'>$i</a></li>";
			}else {
				$out.= "<li><a href='javascript:void(0);' onclick='loadResult(".$i.")'>$i</a></li>";
			}
		}

		// interval

		if($page<($tpages-$adjacents-1)) {
			$out.= "<li class='points'><a>...</a></li>";
		}

		// last

		if($page<($tpages-$adjacents)) {
			$out.= "<li><a href='javascript:void(0);' onclick='loadResult($tpages)'>$tpages</a></li>";
		}

		// next

		if($page<$tpages) {
			$out.= "<li class='next'><span><a href='javascript:void(0);' onclick='loadResult(".($page+1).")'>$next</a></span></li>";
		}else {
			$out.= "<li class='disabled next'><span><a>$next</a></span></li>";
		}
		
		$out.= "</ul>";
		return $out;
	}
?>