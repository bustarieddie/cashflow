<?php
namespace App\Models; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Transaction extends Model { protected $fillable=['type','transaction_date','amount','category','payment_method','from_account','to_account','reference','notes','receipt_path','receipt_original_name','created_by']; protected function casts(): array { return ['transaction_date'=>'date','amount'=>'decimal:2']; } public function creator(): BelongsTo { return $this->belongsTo(User::class,'created_by'); } }
