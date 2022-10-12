<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'bname',
        'fiscal',
        'bnumber',
        'baddress',
        'b_type',
        'services_content',
        'sources',
        'service_charge',
        'unit_price',
        'carriage',
        'discounts',
        'expenses',
        'customers_owe_me',
        'supliers_owe',
        'long_term_loans',
        'prepaid_expenses',
        'accrued_expenses',
        'partners',
        'drawing',
        'investment',
    ];
}
