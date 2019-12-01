<?php

namespace App\Services\Users\Repositories;

use App\Services\Cache\CacheKeyManager;
use App\Services\Cache\Tag;
use Cache;

class CachedUserRepository implements CachedUserRepositoryInterface {

    const CACHE_SEARCH_SECONDS = 3600;

    /** @var UserRepositoryInterface */
    private $userRepository;

    /** @var CacheKeyManager */
    private $cacheKeyManager;

    public function __construct(UserRepositoryInterface $userRepository, CacheKeyManager $cacheKeyManager) {
        $this->userRepository = $userRepository;
        $this->cacheKeyManager = $cacheKeyManager;
    }

    public function search(array $filters = [], array $with = []) {
        $key = $this->cacheKeyManager->getSearchUsersKey($filters);
        $result =  Cache::tags([Tag::USERS])
            ->remember($key, self::CACHE_SEARCH_SECONDS, function () use ($filters, $with) {
                return $this->userRepository->search($filters, $with);
            });

        return $result;
    }

    public function clearSearchCache() {
        Cache::tags([Tag::USERS])->flush();
    }
}
