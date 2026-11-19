<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentWorkspace extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'external_workspace_id',
        'last_active_at',
    ];

    // علاقة: مساحة العمل تنتمي إلى مستخدم واحد
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // علاقة: مساحة العمل تحتوي على عدة سجلات أنشطة
    public function activityLogs()
    {
        return $this->hasMany(AgentActivityLog::class, 'workspace_id');
    }
}
