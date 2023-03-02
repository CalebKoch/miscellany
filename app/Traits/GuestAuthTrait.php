<?php

namespace App\Traits;

use App\Facades\CampaignLocalization;
use App\Facades\EntityPermission;
use App\Models\MiscModel;

trait GuestAuthTrait
{
    /**
     * Secondary Authentication for Guest users
     * @param int $action
     * @param MiscModel|null $model
     * @param int|null $modelType
     * @return void
     */
    protected function authorizeForGuest(int $action, MiscModel $model = null, int $modelType = null)
    {
        $campaign = CampaignLocalization::getCampaign();
        if (empty($modelType)) {
            if (!property_exists($this, 'model')) {
                abort(403);
            }
            $mainModel = new $this->model();
            $modelType = $mainModel->entityTypeId();
        }
        $permission = EntityPermission::hasPermission($modelType, $action, null, $model, $campaign);

        if ($campaign->id != $model->campaign_id || !$permission) {
            // Raise an error
            abort(403);
        }
    }

    /**
     * Secondary Authentication for Guest users
     * @param int $action
     * @param MiscModel|null $model
     * @return void
     */
    protected function authorizeEntityForGuest(int $action, MiscModel $model = null)
    {
        // If the misc model is null ($entity->child), the user has no valid access
        if ($model === null) {
            abort(403);
        }

        $campaign = CampaignLocalization::getCampaign();
        $permission = EntityPermission::hasPermission($model->entityTypeId(), $action, null, $model, $campaign);

        if ($campaign->id != $model->campaign_id || !$permission) {
            // Raise an error
            abort(403);
        }
    }
}
