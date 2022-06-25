<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Users;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Users::all();

        if ($data) {
            return ApiFormatter::createApi(200, 'Success', $data);
        } else {
            return ApiFormatter::createApi(400, 'Failed');
        }
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
        // try {
        //     $request->validate([
        //         'username' => 'required',
        //         'email' => 'required',
        //         'password' => 'required'
        //     ]);

        //     $user = gardenio_tubes::create([
        //         'username' => $request->username,
        //         'email' => $request->email,
        //         'password' => $request->password
        //     ]);

        //     $data = gardenio_tubes::where('id', '=', $gardenio_tubes->id)->get();

        //     if ($data) {
        //         return ApiFormatter::createApi(200, 'Success', $data);
        //     } else {
        //         return ApiFormatter::createApi(400, 'Failed');
        //     }
        // } catch (Exception $error) {
        //     return ApiFormatter::createApi(400, 'Failed');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data = gardenio_tubes::where('id', '=', $id)->get();

        // if ($data) {
        //     return ApiFormatter::createApi(200, 'Success', $data);
        // } else {
        //     return ApiFormatter::createApi(400, 'Failed');
        // }
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
        // try {
        //     $request->validate([
        //         'username' => 'required',
        //         'email' => 'required',
        //         'password' => 'required'
        //     ]);


        //     $gardenio_tubes = gardenio_tubes::findOrFail($id);

        //     $gardenio_tubes->update([
        //         'username' => $request->username,
        //         'address' => $request->address
        //     ]);

        //     $data = Mahasiswa::where('id', '=', $mahasiswa->id)->get();

        //     if ($data) {
        //         return ApiFormatter::createApi(200, 'Success', $data);
        //     } else {
        //         return ApiFormatter::createApi(400, 'Failed');
        //     }
        // } catch (Exception $error) {
        //     return ApiFormatter::createApi(400, 'Failed');
        // }
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
