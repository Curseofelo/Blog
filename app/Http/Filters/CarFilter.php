<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class CarFilter extends AbstractFilter
{
    public const MARK = 'mark';
    public const MODEL = 'model';
    public const PRYCE = 'pryce';
    public const CATEGORY_ID = 'category_id';

    protected function getCallbacks(): array
    {
        return [
            self::MARK => [$this, 'mark'],
            self::MODEL => [$this, 'model'],
            self::PRYCE => [$this, 'pryce'],
            self::CATEGORY_ID => [$this, 'categoryID'],
        ];
    }

    public function mark(Builder $builder, $value)
    {
        $builder->where('mark', 'like', "%{$value}%");
    }

    public function model(Builder $builder, $value)
    {
        $builder->where('model', 'like', "%{$value}%");
    }

    public function pryce(Builder $builder, $value)
{
    $builder->where('pryce',  "%{$value}%");
}

    public function categoryID(Builder $builder, $value)
    {
        $builder->where('category_id', $value);
    }

}
