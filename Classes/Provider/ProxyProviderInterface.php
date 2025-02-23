<?php

declare(strict_types=1);
namespace B13\Proxycachemanager\Provider;

/*
 * This file is part of the b13 TYPO3 extensions family.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * The interface to be called from the CacheBackend.
 */
interface ProxyProviderInterface
{
    /**
     * Sets the proxy endpoints.
     *
     * @param array $endpoints
     */
    public function setProxyEndpoints($endpoints);

    /**
     * flushes the proxy cache for a single URL.
     *
     * @param string $url
     */
    public function flushCacheForUrl($url);

    /**
     * Flushes multiple urls from the proxy cache
     *
     * @param array $urls
     */
    public function flushCacheForUrls(array $urls);

    /**
     * Flushes the whole proxy cache.
     *
     * @param array $urls
     */
    public function flushAllUrls($urls = []);
}
