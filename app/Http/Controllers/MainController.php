<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    
    public function index () 
    {
        $days = array ('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday', 'Special');
        return view('main.index', compact('days'));
    }

    public function show (Request $request)
    {
        $days = array ('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday', 'Special');
        $daysForShow = [];
        $daysMenu = [];
        foreach ($days as $day)
        {
            if ($request->$day)
            {
                array_push($daysForShow, $day);
            }
        }
        
        $dishArray = DB::table('menus')
                    ->whereIn('day', $daysForShow)
                    ->select('dishes')
                    ->addSelect(DB::raw('JSON_UNQUOTE(JSON_EXTRACT(dishes, "$[*]")) AS json_values'))
                    ->get();

        foreach ($dishArray as $row) 
        {
            $jsonValues = json_decode($row->json_values, true);
            foreach ($jsonValues as $value) 
                {
                    array_push($daysMenu, $value);                
                }
        }
            
        return view('main.show', compact('daysForShow'), compact('daysMenu'));
    }
} 
        

