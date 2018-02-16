<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TagRequest as StoreRequest;
use App\Http\Requests\TagRequest as UpdateRequest;

class TagCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Tag');
        $this->crud->setRoute(config('backpack.base.route_prefix').'/tag');
        $this->crud->setEntityNameStrings('tag', 'tags');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // $this->crud->setFromDb();

        $this->crud->addColumns(['name', 'slug']);
        $this->crud->addField([
            'name' => 'name',
            'label'=> 'Tag name'
        ]);

        $this->crud->addField([
            'name' => 'slug',
            'label'=> 'Tag slug'
        ]);
    }

    public function store(StoreRequest $request)
    {
        return parent::storeCrud($request);
    }

    public function update(UpdateRequest $request)
    {
        return parent::updateCrud($request);
    }
}
