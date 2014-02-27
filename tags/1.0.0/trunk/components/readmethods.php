<?php

function get_post_gallery_ids($id,$method="array") {

	if (is_preview($id)) {

		$galleryString = get_post_meta( $id, 'fg_temp_metadata', 1);

	}

	else {

		$galleryString = get_post_meta( $id, 'fg_perm_metadata', 1);

	}

	if ($method == "string") {

		return $galleryString;

	}

	else {

		return explode(',', $galleryString);

	}

}