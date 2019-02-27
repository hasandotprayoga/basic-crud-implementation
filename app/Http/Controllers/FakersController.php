<?php 

namespace App\Http\Controllers;

/**
 * Class FakersController
 * @package App\Http\Controllers
 */
class FakersController extends Controller
{

    use \BasicCrud\BasicCrud;

    /**
     * @var string
     */
    public $model = \App\Models\Fakers::class;

    /**
     * @var array
     */
    public $dataDelete = ['name'=>'DELETED'];

    /**
     * @var array
     */
    public $insertValidation = [
        'name' => 'required',
        'age'=>'required|numeric',
        'country'=>'required'
    ];

    /**
     * @var array
     */
    public $updateValidation = [
        // 'name' => 'required',
        'age'=>'numeric',
        // 'country'=>'required'
    ];

}
