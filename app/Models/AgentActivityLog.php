<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentActivityLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'workspace_id',
        'action_type',
        'payload_json',
    ];

    protected $casts = [
        'payload_json' => 'array', // لتحويل بيانات JSON تلقائياً إلى مصفوفة PHP
    ];

    // علاقة: سجل النشاط ينتمي إلى مساحة عمل
    public function workspace()
    {
        return $this->belongsTo(AgentWorkspace::class, 'workspace_id');
    }
}
