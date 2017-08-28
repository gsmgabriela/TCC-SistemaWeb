<?php
/**
 * Created by PhpStorm.
 * User: gabrielasoares
 * Date: 22/08/2017
 * Time: 12:48
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cadastrosController extends Controller
{


public function index()
{
    return view ('cadastros.index');
}


}