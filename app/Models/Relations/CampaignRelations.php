<?php

namespace App\Models\Relations;

use App\Models\Ability;
use App\Models\Calendar;
use App\Models\CampaignDashboard;
use App\Models\CampaignDashboardWidget;
use App\Models\CampaignFollower;
use App\Models\Genre;
use App\Models\CampaignPlugin;
use App\Models\CampaignRole;
use App\Models\CampaignSetting;
use App\Models\CampaignStyle;
use App\Models\CampaignSubmission;
use App\Models\CampaignUser;
use App\Models\Character;
use App\Models\Conversation;
use App\Models\Creature;
use App\Models\DiceRoll;
use App\Models\Entity;
use App\Models\EntityMention;
use App\Models\Event;
use App\Models\Family;
use App\Models\GameSystem;
use App\Models\Image;
use App\Models\Item;
use App\Models\Journal;
use App\Models\Location;
use App\Models\Map;
use App\Models\Bookmark;
use App\Models\CampaignExport;
use App\Models\Note;
use App\Models\Organisation;
use App\Models\Plugin;
use App\Models\Quest;
use App\Models\Race;
use App\Models\EntityUser;
use App\Models\Tag;
use App\Models\Theme;
use App\Models\Timeline;
use App\Models\CampaignImport;
use App\Models\Webhook;
use App\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

/**
 * Trait CampaignRelations
 * @package App\Models\Relations
 *
 * @property Collection|User[] $users
 * @property Collection|User[] $followers
 * @property Collection|CampaignRole[] $roles
 *
 * @property Collection|EntityMention[] $mentions
 * @property Collection|CampaignSetting $setting
 * @property Collection|CampaignUser[] $members
 * @property Collection|Theme[] $theme
 * @property Collection|Webhook[] $webhooks
 *
 * @property Collection|Entity[] $entities
 * @property Collection|Character[] $characters
 * @property Collection|Location[] $locations
 *
 * @property Collection|Image[] $images
 * @property Collection|Plugin[] $plugins
 * @property Collection|CampaignPlugin[] $campaignPlugins
 *
 * @property Collection|CampaignDashboardWidget[] $widgets
 * @property Collection|CampaignDashboard[] $dashboards
 * @property Collection|CampaignSubmission[] $submissions
 * @property Collection|CampaignStyle[] $styles
 * @property Collection|Genre[] $genres
 * @property Collection|GameSystem[] $systems
 * @property Collection|CampaignExport[] $campaignExports
 * @property Collection|CampaignExport[] $queuedCampaignExports
 */
trait CampaignRelations
{
    /**
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany('App\User', 'campaign_user')->using('App\Models\CampaignUser');
    }

    public function followers(): BelongsToMany
    {
        return $this->belongsToMany('App\User', 'campaign_followers')->using(CampaignFollower::class);
    }

    public function setting(): BelongsTo
    {
        return $this->belongsTo('App\Models\CampaignSetting', 'id', 'campaign_id');
    }

    public function members(): HasMany
    {
        return $this->hasMany('App\Models\CampaignUser');
    }

    public function nonAdmins()
    {
        return $this
            ->members()
            ->withoutAdmins()
            ->with(['user', 'user.campaignRoles'])
        ;
    }

    public function roles(): HasMany
    {
        return $this->hasMany(CampaignRole::class);
    }

    public function webhooks(): HasMany
    {
        return $this->hasMany(Webhook::class);
    }

    public function characters(): HasMany
    {
        return $this->hasMany(Character::class);
    }

    public function locations(): HasMany
    {
        return $this->hasMany(Location::class);
    }

    public function calendars(): HasMany
    {
        return $this->hasMany(Calendar::class);
    }

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }

    public function families(): HasMany
    {
        return $this->hasMany(Family::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }

    public function journals(): HasMany
    {
        return $this->hasMany(Journal::class);
    }

    public function maps(): HasMany
    {
        return $this->hasMany(Map::class);
    }

    public function notes(): HasMany
    {
        return $this->hasMany(Note::class);
    }

    public function organisations(): HasMany
    {
        return $this->hasMany(Organisation::class);
    }

    public function quests(): HasMany
    {
        return $this->hasMany(Quest::class);
    }

    public function abilities(): HasMany
    {
        return $this->hasMany(Ability::class);
    }

    public function tags(): HasMany
    {
        return $this->hasMany(Tag::class);
    }

    public function timelines(): HasMany
    {
        return $this->hasMany(Timeline::class);
    }

    public function bookmarks(): HasMany
    {
        return $this->hasMany(Bookmark::class)
            ->with(['dashboard']);
    }

    public function diceRolls(): HasMany
    {
        return $this->hasMany(DiceRoll::class);
    }

    public function conversations(): HasMany
    {
        return $this->hasMany(Conversation::class);
    }

    public function races(): HasMany
    {
        return $this->hasMany(Race::class);
    }

    public function creatures(): HasMany
    {
        return $this->hasMany(Creature::class);
    }

    public function images(): HasMany|Image
    {
        return $this->hasMany(Image::class)
            ->where('is_default', false);
    }

    /**
     * List of entities that are mentioned in the campaign's description
     */
    public function mentions(): HasMany
    {
        return $this->hasMany('App\Models\EntityMention', 'campaign_id', 'id');
    }

    public function entities(): HasMany
    {
        return $this->hasMany(Entity::class, 'campaign_id', 'id');
    }

    public function theme(): BelongsTo
    {
        return $this->belongsTo('App\Models\Theme');
    }

    public function submissions(): HasMany
    {
        return $this->hasMany('App\Models\CampaignSubmission');
    }

    public function entityRelations(): HasMany
    {
        return $this->hasMany('App\Models\Relation');
    }

    /**
     */
    public function plugins(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Plugin', 'campaign_plugins', 'campaign_id', 'plugin_id')
            //->using('App\Models\CampaignPlugin')
            ->withPivot('is_active')
            ->withPivot('plugin_version_id')
        ;
    }

    public function campaignPlugins(): HasMany
    {
        return $this->hasMany(CampaignPlugin::class);
    }

    public function widgets(): HasMany
    {
        return $this->hasMany(CampaignDashboardWidget::class);
    }

    public function dashboards(): HasMany
    {
        return $this->hasMany(CampaignDashboard::class);
    }

    public function campaignExports(): HasMany
    {
        return $this->hasMany(CampaignExport::class);
    }

    public function queuedCampaignExports()
    {
        return $this->campaignExports()
            ->whereIn('status', [CampaignExport::STATUS_SCHEDULED, CampaignExport::STATUS_RUNNING]);
    }

    public function campaignImports(): HasMany
    {
        return $this->hasMany(CampaignImport::class);
    }

    public function styles(): HasMany
    {
        return $this->hasMany(CampaignStyle::class);
    }

    /**
     */
    public function editingUsers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'entity_user')
            ->using(EntityUser::class)
            ->withPivot('type_id');
    }

    public function invites(): HasMany
    {
        return $this->hasMany('App\Models\CampaignInvite');
    }

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }

    public function systems(): BelongsToMany
    {
        return $this->belongsToMany(GameSystem::class, 'campaign_system', 'campaign_id', 'system_id');
    }
}
