<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMemberRequest;

use App\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $members = Member::all();

        return response()->json(['data' => $members], 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateMemberRequest $request)
    {
        $values = $request->only(['first_name','last_name','email', 'phone','password']);
        Member::create($values);

         return response()->json(['message' => 'Member Created Successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $member = Member::find($id);

        if(!$member){
            return response()->json(['message' => 'This member does not exist', 'code' => 404], 404);
        }

        return response()->json(['data' => $member ], 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
