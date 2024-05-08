<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogEntry extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'seo_description',
        'category',
        'content',
        'is_active'
    ];

    public function relatedCategory(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public static function generateSlug($title) {
        $tempTitle = $title;
        // Türkçe karakterleri değiştirmek için bir dizi oluştur
        $trCharacters = array('Ç', 'ç', 'Ğ', 'ğ', 'İ', 'ı', 'Ö', 'ö', 'Ş', 'ş', 'Ü', 'ü');
        $trCharactersChanges = array('C', 'c', 'G', 'g', 'I', 'i', 'O', 'o', 'S', 's', 'U', 'u');

        // Değeri küçük harflere dönüştür
        $newValue = mb_strtolower($tempTitle, 'UTF-8');

        // Türkçe karakterleri değiştir
        $newValue = str_replace($trCharacters, $trCharactersChanges, $newValue);

        // Boşlukları alt çizgi ile değiştir
        $newValue = str_replace(' ', '_', $newValue);

        // Diğer tüm özel karakterleri kaldır
        $newValue = preg_replace('/[^a-zA-Z0-9_]/', '', $newValue);

        return $newValue;
    }

    public function parseHeaders() {
        preg_match_all('/<h2>([A-Z].+)<\/h2>/', $this->content, $matches);
        $this->attributes['headers'] = array();
        if(count($matches[0]) > 0) {
            foreach($matches[1] as $match) {
                array_push($this->attributes['headers'], [
                    'slug' => static::generateSlug($match),
                    'title' => $match
                ]);
            }
        }
    }

    public function parseAbstract(){
        preg_match_all('/<p>(.*?)<\/p>/s', $this->content, $matches);
        $this->attributes['abstract'] = $matches[1][0];
    }
}
