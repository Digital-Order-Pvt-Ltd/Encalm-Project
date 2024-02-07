<?php

set_time_limit(0);

$baseURL = 'https://encalm.com';

function generateSitemap($urls) {
    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;
    
    foreach ($urls as $url) {
        $xml .= "\t<url>" . PHP_EOL;
        $xml .= "\t\t<loc>{$url}</loc>" . PHP_EOL;
        $xml .= "\t</url>" . PHP_EOL;
    }
    
    $xml .= '</urlset>';
    return $xml;
}

function crawlURL($url) {
    $urls = [];
    
    $html = file_get_contents($url);
    
    if ($html !== false) {
        $dom = new DOMDocument();
        libxml_use_internal_errors(true); // Suppress DOMDocument errors
        @$dom->loadHTML($html);
        libxml_clear_errors(); // Clear errors
        
        $links = $dom->getElementsByTagName('a');
        
        foreach ($links as $link) {
            $href = $link->getAttribute('href');
            
            if (strpos($href, 'http') !== 0) {
                $urls[] = rtrim($url, '/') . '/' . ltrim($href, '/');
            }
        }
    }
    
    return $urls;
}

$visitedURLs = [];
$queue = [$baseURL];

while (!empty($queue)) {
    $currentURL = array_shift($queue);
    
    if (!in_array($currentURL, $visitedURLs)) {
        $visitedURLs[] = $currentURL;
        
        $subLinks = crawlURL($currentURL);
        $queue = array_merge($queue, $subLinks);
    }
}

$sitemapContent = generateSitemap($visitedURLs);

file_put_contents('sitemap.xml', $sitemapContent);

echo 'Sitemap generated and URLs visited successfully.';
?>
