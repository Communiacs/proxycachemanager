<?php
declare(strict_types = 1);
namespace B13\Proxycachemanager\ResourceStorageOperations;

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

use TYPO3\CMS\Core\Resource\FileInterface;
use TYPO3\CMS\Core\Resource\Folder;
use TYPO3\CMS\Core\Site\SiteFinder;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class ResourceStorageSlot
{

    protected $cacheService;

    public function __construct()
    {
        $siteFinder = GeneralUtility::makeInstance(SiteFinder::class);
        $this->cacheService = GeneralUtility::makeInstance(CacheService::class, $siteFinder);
    }

    public function fileRename(FileInterface $file, $targetFolder): void
    {
        $this->cacheService->flushCachesForFile($file);
    }

    public function fileMove(FileInterface $file, Folder $targetFolder, string $targetFileName): void
    {
        $this->cacheService->flushCachesForFile($file);
    }

    public function fileDelete(FileInterface $file): void
    {
        $this->cacheService->flushCachesForFile($file);
    }

    public function fileReplace(FileInterface $file, $localFilePath): void
    {
        $this->cacheService->flushCachesForFile($file);
    }

    public function folderRemove(Folder $folder): void
    {
        $this->cacheService->flushCachesForFolder($folder);
    }

    public function folderRename(Folder $folder, $newName): void
    {
        $this->cacheService->flushCachesForFolder($folder);
    }

    public function folderMove(Folder $folder, Folder $targetFolder, $newName): void
    {
        $this->cacheService->flushCachesForFolder($folder);
    }

}
