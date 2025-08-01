<?php 
/**
 * Enable SVG upload and display in WordPress
 */

// Allow SVG uploads
function add_svg_to_upload_mimes($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'add_svg_to_upload_mimes');

// Fix SVG media library preview
function fix_svg_media_thumbnails() {
    echo '
    <style>
        .attachment-266x266, .thumbnail img {
            width: 100% !important;
            height: auto !important;
        }
    </style>';
}
add_action('admin_head', 'fix_svg_media_thumbnails');

// SVG sanitization for security
function sanitize_svg($file) {
    if ($file['type'] === 'image/svg+xml') {
        // Read the file content
        $content = file_get_contents($file['tmp_name']);
        
        // Use DOMDocument to sanitize SVG
        $doc = new DOMDocument();
        $doc->loadXML($content);
        
        // Remove potentially harmful elements and attributes
        $elements_to_remove = array('script', 'use', 'foreignObject');
        $dangerous_attributes = array('onload', 'onclick', 'onmouseover', 'onerror');
        
        // Function to sanitize nodes recursively
        function sanitize_node($node) {
            global $elements_to_remove, $dangerous_attributes;
            
            if ($node->hasChildNodes()) {
                foreach ($node->childNodes as $child) {
                    if ($child->nodeType === XML_ELEMENT_NODE) {
                        // Remove dangerous elements
                        if (in_array($child->nodeName, $elements_to_remove)) {
                            $node->removeChild($child);
                            continue;
                        }
                        
                        // Remove dangerous attributes
                        foreach ($dangerous_attributes as $attr) {
                            if ($child->hasAttribute($attr)) {
                                $child->removeAttribute($attr);
                            }
                        }
                        
                        // Process child nodes recursively
                        sanitize_node($child);
                    }
                }
            }
        }
        
        sanitize_node($doc->documentElement);
        
        // Save the sanitized content back to the file
        file_put_contents($file['tmp_name'], $doc->saveXML());
    }
    
    return $file;
}
add_filter('wp_handle_upload_prefilter', 'sanitize_svg');

// Enable SVG thumbnail display in media library
function svg_thumbnail_urls($response, $attachment, $meta) {
    if ($response['type'] === 'image/svg+xml' && empty($response['sizes'])) {
        $svg_url = $response['url'];
        $response['sizes'] = array(
            'full' => array(
                'url' => $svg_url
            ),
            'thumbnail' => array(
                'url' => $svg_url
            ),
            'medium' => array(
                'url' => $svg_url
            ),
            'large' => array(
                'url' => $svg_url
            )
        );
    }
    return $response;
}
add_filter('wp_prepare_attachment_for_js', 'svg_thumbnail_urls', 10, 3);


?>