<?php

// @formatter:off

/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */

namespace App\Models {
    /**
     * App\Models\Category
     *
     * @property int $id
     * @property string $name
     * @property string $slug
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $posts
     * @property-read int|null $posts_count
     * @method static \Database\Factories\CategoryFactory factory(...$parameters)
     * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Category query()
     * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
     */
    class Category extends \Eloquent
    {
    }
}

namespace App\Models {
    /**
     * App\Models\Post
     *
     * @property int $id
     * @property int $user_id
     * @property int $category_id
     * @property string $slug
     * @property string $title
     * @property string $excerpt
     * @property string $body
     * @property string|null $published_at
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \App\Models\User $author
     * @property-read \App\Models\Category $category
     * @method static \Database\Factories\PostFactory factory(...$parameters)
     * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|Post query()
     * @method static \Illuminate\Database\Eloquent\Builder|Post whereBody($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Post whereCategoryId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Post whereExcerpt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Post wherePublishedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Post whereSlug($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|Post whereUserId($value)
     */
    class Post extends \Eloquent
    {
    }
}

namespace App\Models {
    /**
     * App\Models\User
     *
     * @property int $id
     * @property string $username
     * @property string $name
     * @property string $email
     * @property \Illuminate\Support\Carbon $email_verified_at
     * @property string $password
     * @property string|null $remember_token
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
     * @property-read int|null $notifications_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $posts
     * @property-read int|null $posts_count
     * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
     * @property-read int|null $tokens_count
     * @method static \Database\Factories\UserFactory factory(...$parameters)
     * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|User query()
     * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
     * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
     */
    class User extends \Eloquent
    {
    }
}

