<?php

namespace App\Http\Controllers;

use App\DemoProducts;
use Illuminate\Http\Request;

class DemoProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $products = DemoProducts::all();
            $returnData = [
                'status'  => '1',
                'message' => 'Demo Products list',
                'data'    =>  $products
            ];
        } catch (\Exception $e) {
            $returnData=[
                'status'  => '0',
                'message' => 'Error in getting products list',
                'data'    =>  $e->getMessage()
            ];
        }
        return $returnData;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $createDemo = DemoProducts::create($request->all());
            $returnData = [
                'status'  => '1',
                'message' => 'Demo Products created',
                'data'    =>  $createDemo
            ];
        } catch (\Exception $e) {
            $returnData=[
                'status'  => '0',
                'message' => 'Error in creation',
                'data'    =>  $e->getMessage()
            ];
        }
        return $returnData;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        try {
            $product = DemoProducts::find($id);
            $returnData = [
                'status'  => '1',
                'message' => 'Demo Products found',
                'data'    =>  $product
            ];
        } catch (\Exception $e) {
            $returnData=[
                'status'  => '0',
                'message' => 'Error in getting product by id',
                'data'    =>  $e->getMessage()
            ];
        }
        return $returnData;
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
        try {
            $updateProducts = DemoProducts::find($id)->update($request->all());
            $returnData = [
                'status'  => '1',
                'message' => 'Demo Products updated',
                'data'    =>  $updateProducts
            ];
        } catch (\Exception $e) {
            $returnData=[
                'status'  => '0',
                'message' => 'Error in updating product by id',
                'data'    =>  $e->getMessage()
            ];
        }
        return $returnData;
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
        try {
            $deleteProducts = DemoProducts::find($id)->delete();
            $returnData = [
                'status'  => '1',
                'message' => 'Demo Products deleted',
                'data'    =>  $deleteProducts
            ];
        } catch (\Exception $e) {
            $returnData=[
                'status'  => '0',
                'message' => 'Error in deleting product by id',
                'data'    =>  $e->getMessage()
            ];
        }
        return $returnData;

    }
}