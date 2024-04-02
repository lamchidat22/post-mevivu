<?php

namespace App\Repositories\Category;

use App\Admin\Repositories\EloquentStandardRepository;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository extends EloquentStandardRepository implements CategoryRepositoryInterface
{
    public function getModel()
    {
        return Category::class;
    }

    public function getFlatTreeNotInNode(array $nodeId)
    {
        $this->getQueryBuilderOrderBy('position', 'ASC');
        $this->instance = $this->instance->whereNotIn('id', $nodeId)
            ->withDepth()
            ->get()
            ->toFlatTree();
        return $this->instance;
    }
    public function getFlatTree()
    {
        $this->getQueryBuilderOrderBy('position', 'ASC');
        $this->instance = $this->instance->withDepth()
            ->get()
            ->toFlatTree();
        return $this->instance;
    }
    public function searchAllLimit($keySearch = '', $meta = [], $limit = 10)
    {
        $this->instance = $this->model->where('name', 'like', "%{$keySearch}%");
        $this->applyFilters($meta);
        return $this->instance->published()->limit($limit)->get();
    }
}
