<?php

namespace Spatie\Crawler;

use Psr\Http\Message\ResponseInterface;

interface CrawlObserver
{
    /**
     * Called when the crawler will crawl the url.
     *
     * @param \Spatie\Crawler\Url $url
     */
    public function willCrawl(Url $url);

    /**
     * Called when the crawler has crawled the given url.
     *
     * @param \Spatie\Crawler\Url                 $url
     * @param \Psr\Http\Message\ResponseInterface $response
     */
    public function hasBeenCrawled(Url $url, ResponseInterface $response);

    /**
     * Called when the crawl has ended.
     */
    public function finishedCrawling();
}
