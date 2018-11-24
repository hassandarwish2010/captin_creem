<?php

/**
 * Upload image
 *
 * @return name
 */
function uploadImage($upload, $resize_width = 500, $resize_height = 500){
        $filename = rand().time().'.'.$upload->getClientOriginalExtension();
        $filePath = public_path('uploads/').$filename;
        $thumbPath = public_path('uploads/thumbs/').$filename;
        $image = Image::make($upload);
        $thumb = Image::make($upload)->resize($resize_width, $resize_height)->encode($upload->getClientOriginalExtension(), 75);
        $image->save($filePath);
        $thumb->save($thumbPath);
        return $filename;
}

/**
 * Limit with clean string
 *
 * @return string
 */
function clean_limit($string, $limit = 20) {
  return $string = str_limit(html_entity_decode(strip_tags($string)), $limit);
}

function clean_limit_tall($string, $limit = 40) {
  return $string = str_limit(html_entity_decode(strip_tags($string)), $limit);
}