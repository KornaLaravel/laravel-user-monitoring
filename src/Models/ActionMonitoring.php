<?php

namespace Binafy\LaravelUserMonitoring\Models;

use Illuminate\Database\Eloquent\Model;

class ActionMonitoring extends Model
{
    /**
     * Set table name.
     *
     * @var string
     */
    protected $table = 'actions_monitoring';

    /**
     * Guarded columns.
     *
     * @var array
     */
    protected $guarded = ['id'];

    # Methods

    public function getTypeColor(): string
    {
        return match ($this->action_type) {
            'read' => 'blue',
            'store' => 'green',
            'update' => 'purple',
            'delete' => 'red',
            default => 'gray',
        };
    }

    # Relations

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(
            config('user-monitoring.user.model'),
            config('user-monitoring.user.foreign_key')
        );
    }
}
