<?php
namespace App\Models; use Illuminate\Database\Eloquent\Model;
class DailyBalance extends Model { protected $fillable=['balance_date','opening_balance','actual_closing','notes','updated_by']; protected function casts(): array { return ['balance_date'=>'date','opening_balance'=>'decimal:2','actual_closing'=>'decimal:2']; } }
