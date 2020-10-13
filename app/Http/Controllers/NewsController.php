<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    /****************************     
        // Simple Variable
        $simple = 'mlouk';
        //dd($simple);
        
        // Array
        $array = ["GTA IV", "Saints row", "Red Dead"];
        // dd($array[0]);

        // Associative Array
        $arr = ["name" => "abdulmalik"]; 
        // dd($arr["name"]);

        // Do collections 
        $collections = collect([1, 2, 3]);
        // dd($collections);
        // dd(gettype($collections));
         *************************************/

        // Here we pass value with [object, array, simple variable]
        /*********Array
         *  Array
         *  we display array type value into view 
         */
        /* 
        $arr=[];
        $arr['name'] = "Mlouk";
        $arr['age'] = 21;
        return view('welcome', $arr); */
        /***************END Array*****************/

        /***********Object
         * Object
         * We  Display Object type into view 
         */
        /* $obj = new \stdClass();
        $obj->name = "Mlouk";
        $obj->age  = 23;
        return view('welcome', compact('obj')); */
        /***************END Object*******************/
        /* $obj = new \stdClass();
        $obj->name = "abdulmalik";
        $obj->age = 23;
        return view('welcome', compact('obj')); */

        /*******Variable
         *  Variable
         *  Simpl Variable to view
         */
        // return view('welcome')->with(['name' => 'abdulmalik', 'age' => 23]);

        $arr = ["naruto","dragon ball", "death note", "welcome to the nhk"];
        return view('welcome', compact('arr'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
