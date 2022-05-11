<?php

namespace App\Service;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryService
{

    public function store($data)
    {
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            $category = Category::firstOrCreate($data);
    }

    public function update($data, $category)
    {

            if (isset($data['preview_image'])) {

                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }

            $category->update($data);

        return $category;
    }

}
