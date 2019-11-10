<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy {
    use HandlesAuthorization;

    public function before(User $user) {
        if ($user->isAdmin()) {
            return true;
        }
    }

    /**
     * Determine whether the user can view any categories.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function viewAny(User $user) {
        return true;
    }

    /**
     * Determine whether the user can view the category.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Category $category
     * @return mixed
     */
    public function view(User $user, Category $category) {
        return true;
    }

    /**
     * Determine whether the user can create categories.
     *
     * @param \App\Models\User $user
     * @return mixed
     */
    public function create(User $user) {
        return $user->isEditor();
    }

    /**
     * Determine whether the user can update the category.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Category $category
     * @return mixed
     */
    public function update(User $user, Category $category) {
        return $user->isEditor();
    }

    /**
     * Determine whether the user can delete the category.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Category $category
     * @return mixed
     */
    public function delete(User $user, Category $category) {
        return $user->isEditor();
    }

    /**
     * Determine whether the user can restore the category.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Category $category
     * @return mixed
     */
    public function restore(User $user, Category $category) {
        return $user->isEditor();
    }

    /**
     * Determine whether the user can permanently delete the category.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Category $category
     * @return mixed
     */
    public function forceDelete(User $user, Category $category) {
        return false;
    }
}
