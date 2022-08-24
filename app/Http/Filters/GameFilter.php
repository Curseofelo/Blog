<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class GameFilter extends AbstractFilter
{
    public const TYPE = 'type';
    public const COMPANY = 'company';
    public const TITLE = 'title';
    public const CATEGORY_ID = 'category_id';

    protected function getCallbacks(): array
    {
        return [
            self::TYPE => [$this, 'type'],
            self::COMPANY => [$this, 'company'],
            self::TITLE => [$this, 'title'],
            self::CATEGORY_ID => [$this, 'categoryID'],
        ];
    }

    public function type(Builder $builder, $value)
    {
        $builder->where('type', 'like', "%{$value}%");
    }

    public function company(Builder $builder, $value)
    {
        $builder->where('company', 'like', "%{$value}%");
    }

    public function title(Builder $builder, $value)
{
    $builder->where('title', 'like', "%{$value}%");
}

    public function categoryID(Builder $builder, $value)
    {
        $builder->where('category_id', $value);
    }

}
