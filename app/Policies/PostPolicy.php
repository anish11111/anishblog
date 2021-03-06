<?php

namespace App\Policies;

use App\Model\admin\admin;
use App\Model\user\post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the post.
     *
     * @param  \App\Model\admin\admin  $user
     * @param  \App\post  $post
     * @return mixed
     */
    public function view(admin $user, post $post)
    {
        //
    }

    /**
     * Determine whether the user can create posts.
     *
     * @param  \App\Model\admin\admin  $user
     * @return mixed
     */
    public function create(admin $user)
    {
        return $this->getPermission($user,2);
    }

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\post  $post
     * @return mixed
     */
    public function update(admin $user)
    {
        return $this->getPermission($user,2);
    }

    /**
     * Determine whether the user can delete the post.
     *
     * @param  \App\Model\admin\admin  $user
     * @param  \App\post  $post
     * @return mixed
     */
    public function delete(admin $user)
    {
        return $this->getPermission($user,2);
    }

    public function getPermission($user,$id)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if($permission->id == $id){
                    return true;
                }
            }
        }
        return false;
    }

    public function tag(admin $user)
    {
        return $this->getPermission($user,9);
    }

    public function category(admin $user)
    {
        return $this->getPermission($user,10);
    }


}
