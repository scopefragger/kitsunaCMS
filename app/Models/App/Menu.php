<?php

namespace App\Models\App;
use App\Models\Blueprint\Taxonomy;

class Menu extends Taxonomy
{

    public $table = "menu";
    public $parent = "Navigation";
    public $fields = [
        'id' => [
            'type' => 'increment',
            'placeholder' => 'Title',
            'hidden' => 'true',
            'label' => 'ID',
            'rules' => 'required',
            'table' => 'true'
        ],
        'title' => [
            'type' => 'string',
            'placeholder' => 'Title',
            'label' => 'Title',
            'rules' => 'required',
            'table' => 'true'
        ]
    ];


    public $relations = [
        'hasMany' => [
            [
                'item' => 'link',
                'local' => 'id',
                'remote' => 'menu'
            ]
        ]
    ];
}
