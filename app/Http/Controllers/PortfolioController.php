<?php
/*Este controlador es el responsable de  manejar la vista de portafolio */

namespace App\Http\Controllers;

use App\CreateDate;
use App\Service;
use App\Barber;
use DB;
use Illuminate\Http\Request;


// Esta clase es el controlador 
class PortfolioController extends Controller
{
    public function portfolio()
    {
        return view('portfolio');
    }
}