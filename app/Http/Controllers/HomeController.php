<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Background;
use App\Models\Product;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {   
        $background = Background::all();
        $products = Product::all();
        return view('welcome',compact('products','background'));
    }
    public function test(Request $request)
    {   
        $process = new Process(['python', base_path('\public\scripts\test.py')]);
        $process->run();

        if (!$process->isSuccessful()) {
        throw new ProcessFailedException($process);
        }

        $output = $process->getOutput();
        dd($output);
    }
    
}
