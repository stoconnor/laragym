<?php

/**
 * Created by John Dave Decano<johndavedecano@gmail.com>.
 * Date: Mon, 16 Apr 2018 18:21:38 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;
use App\Models\HasService;
use App\Models\HasCycle;
use App\Models\HasPackage;
use App\Models\HasUser;

/**
 * Class Subscription
 *
 * @property int $id
 * @property int $user_id
 * @property int $package_id
 * @property int $service_id
 * @property int $cycle_id
 * @property \Carbon\Carbon $expires_at
 * @property \Carbon\Carbon $suspended_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Subscription extends Eloquent
{
    use HasService;

    use HasCycle;
    
    use HasPackage;

    use HasUser;

    protected $casts = [
        'user_id' => 'int',
        'package_id' => 'int',
        'service_id' => 'int',
        'cycle_id' => 'int',
        'interval' => 'int',
        'is_expired' => 'bool',
        'is_suspended' => 'bool',
    ];

    protected $dates = [
        'expires_at',
        'suspended_at'
    ];

    protected $fillable = [
        'user_id',
        'package_id',
        'service_id',
        'cycle_id',
        'expires_at',
        'suspended_at',
        'interval',
        'is_expired',
        'is_suspended',
    ];
}
