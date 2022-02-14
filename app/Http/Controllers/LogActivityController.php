<?php

namespace App\Http\Controllers;

use App\Models\log_activity;
use App\Http\Requests\Storelog_activityRequest;
use App\Http\Requests\Updatelog_activityRequest;

class LogActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storelog_activityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storelog_activityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\log_activity  $log_activity
     * @return \Illuminate\Http\Response
     */
    public function show(log_activity $log_activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\log_activity  $log_activity
     * @return \Illuminate\Http\Response
     */
    public function edit(log_activity $log_activity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatelog_activityRequest  $request
     * @param  \App\Models\log_activity  $log_activity
     * @return \Illuminate\Http\Response
     */
    public function update(Updatelog_activityRequest $request, log_activity $log_activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\log_activity  $log_activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(log_activity $log_activity)
    {
        //
    }
}
