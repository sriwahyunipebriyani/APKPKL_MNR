<?php

namespace App\Models;

use App\Models\category;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class documents extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;

    protected $fillable = [
        'no_purchase_other', 'no_request', 'keterangan_pembelian',
        'tanggal_invoice', 'nama_vendor', 'sender', 'slug', 'description_reject', 'date_send',
        'date_Received', 'file', 'status', 'destination_sent',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'sender',
            ],
        ];
    }

    /**
     * The categories that belong to the documents
     *
     * @return \Illuminate\Database\categoryuent\Relations\BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(category::class, 'dockument_category', 'documents_id', 'category_id');
    }
}
