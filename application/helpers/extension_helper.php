<?php
function extension($path = "", $file_name = "")
{
	$pathInfo = pathinfo($path);
	$ext = $pathInfo['extension'];
	if ($ext == 'png') {
		$cardHeader = '<div class="card-header text-center" style="background-color:#F6DDCC;">
							<span style="font-size:50px; color:#D35400;"><i class="fas fa-file-image"></i></span>
  						</div>';
	} else if ($ext == 'jpg' || $ext == 'jpeg') {
		$cardHeader = '<div class="card-header text-center" style="background-color:#E8DAEF;">
							<span style="font-size:50px; color:#8E44AD;"><i class="fas fa-file-image"></i></span>
					  </div>';
	} else if ($ext == 'doc' || $ext == 'docx') {
		$cardHeader = '	<div class="card-header text-center" style="background-color:#D6EAF8;">
							<span style="font-size:50px; color:#3498DB;"><i class="fas fa-file-word"></i></span>
  						</div>';
	} else if ($ext == 'xls' || $ext == 'xlsx') {
		$cardHeader = '<div class="card-header text-center" style="background-color:#D5F5E3;">
							<span style="font-size:50px; color:#2ECC71;"><i class="fas fa-file-excel"></i></span>
  						</div>';
	} else if ($ext == 'ppt' || $ext == 'pptx') {
		$cardHeader = '<div class="card-header text-center" style="background-color:#FDEBD0;">
							<span style="font-size:50px; color:#F39C12;"><i class="fas fa-file-powerpoint"></i></span>
  						</div>';
	} else if ($ext == 'pdf') {
		$cardHeader = '	<div class="card-header text-center" style="background-color:#FADBD8;">
							<span style="font-size:50px; color:#E74C3C;"><i class="fas fa-file-pdf"></i></span>
  						</div>';
	} else {
		$cardHeader = '<div class="card-header text-center" style="background-color:#E5E8E8;">
							<span style="font-size:50px; color:#7F8C8D;"><i class="fas fa-file"></i></span>
  						</div>';
	}

	$card = '<div style="width:170px !important;">
				<div class="card">
					' . $cardHeader . '
					<div style="font-size:14px; padding-top:0.5rem; padding-bottom:0.5rem;" class="card-body">
	  					<a href="' . $path . '">' . $file_name . '</a>
					</div>
  				</div>
			  </div>';

	return $card;
}
