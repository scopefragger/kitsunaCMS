<?php


namespace App\Models\App;
use App\Models\Blueprint\Taxonomy;


class Wheel extends Taxonomy
{

    public $table = "wheel";
    public $parent = "Other";
    public $fields = [
        'title' => [
            'type' => 'string',
            'placeholder' => 'Title',
            'label' => 'Title',
            'rules' => 'required',
            'table' => 'true'
        ],
        'model' => [
            'type' => 'string',
            'placeholder' => 'Model',
            'label' => 'Model',
            'rules' => 'required'
        ],
        'status' => [
            'type' => 'string',
            'placeholder' => 'Status',
            'label' => 'Status',
            'rules' => 'required'
        ],
        'thickness' => [
            'type' => 'integer',
            'placeholder' => '1mm',
            'label' => 'Tickeness ( in MM )',
            'rules' => 'required',
            'table' => 'true'
        ],
        'rubber' => [
            'type' => 'integer',
            'placeholder' => 'Please Select',
            'label' => 'Rubber',
            'rules' => 'required'
        ],
    ];

}
