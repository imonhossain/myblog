<?php

namespace Myblog\Repositories\Backend\Access\Permission;

use Myblog\Repositories\BaseRepository;
use Myblog\Models\Access\Permission\Permission;

/**
 * Class PermissionRepository.
 */
class PermissionRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Permission::class;
}
