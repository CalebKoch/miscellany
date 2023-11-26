<?php

namespace App\Models;

use App\Models\Concerns\Searchable;
use App\Models\Concerns\Sortable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FaqCategory
 * @package App\Models
 *
 *
 * @property int $id
 * @property string $locale
 * @property string $title
 * @property int $order
 * @property bool $is_visible
 *
 * @property Faq[]|Collection $faqs
 * @property FaqCategoryTranslation[]|Collection $translations
 * @property FaqCategoryTranslation|null $localeTranslation
 */
class FaqCategory extends Model
{
    use Searchable;
    use Sortable;

    public $searchableColumns = ['name'];
    public $sortableColumns = [];

    public $fillable = [
        'title',
        'order',
        'is_visible',
        'locale'
    ];

    protected $_locale;
    protected $_faqCount = false;
    protected $_translatedCount = false;


    /**
     * @param Builder $query
     * @param bool $visible
     * @return mixed
     */
    public function scopeVisible(Builder $query, $visible = true)
    {
        return $query->where('is_visible', $visible);
    }

    /**
     * @param Builder $query
     * @param string $locale
     * @return mixed
     */
    public function scopeLocale(Builder $query, $locale = 'en')
    {
        return $query->where('locale', $locale);
    }

    /**
     * @param Builder $query
     * @param string $order
     * @return Builder
     */
    public function scopeOrdered(Builder $query, $order = 'ASC')
    {
        return $query->orderBy('order', $order);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function faqs()
    {
        return $this->hasMany('App\Models\Faq', 'faq_category_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function translations()
    {
        return $this->hasMany('App\Models\FaqCategoryTranslation', 'faq_category_id', 'id');
    }

    /**
     * @return mixed
     */
    public function localeTranslation()
    {
        return $this->hasOne(FaqCategoryTranslation::class, 'faq_category_id', 'id')
            ->where('locale', app()->getLocale());
    }

    /**
     * @return string
     */
    public function getNameAttribute()
    {
        return $this->title;
    }

    /**
     * @return Faq[]|Collection
     */
    public function sortedFaqs()
    {
        return $this->faqs
            ->where('is_visible', true)
            ->sortBy('order');
    }

    /**
     * Get the title (translated if available)
     * @return string
     */
    public function title(): string
    {
        if ($this->localeTranslation && !empty($this->localeTranslation->title)) {
            return $this->localeTranslation->title;
        }
        return $this->title;
    }

    /**
     * @param string $locale
     * @return string
     */
    public function translatedTitle(string $locale): string
    {
        $translation = $this->translations->where('locale', $locale)->first();
        if (!$translation) {
            return '';
        }

        return $translation->title;
    }

    /**
     * @param string $locale
     * @return bool
     */
    public function untranslated(string $locale): bool
    {
        return $this->faqCount() <> $this->translatedCount($locale);
    }

    /**
     * @param string $locale
     * @return mixed
     */
    public function translatedCount($locale)
    {
        if ($this->_translatedCount === false) {
            $ids = $this->faqs->pluck('id')->toArray();
            $this->_translatedCount = FaqTranslation::locale($locale)
                ->whereIn('faq_id', $ids)
                ->whereNotNull('answer')
                ->where('answer', '<>', '')
                ->count();
        }
        return $this->_translatedCount;
    }

    /**
     * @return mixed
     */
    public function faqCount()
    {
        if ($this->_faqCount === false) {
            $this->_faqCount = $this->faqs->count();
        }
        return $this->_faqCount;
    }
}
