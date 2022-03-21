<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Job;

class JobController extends Controller
{
    public function create(Request $request) {
        $job = new Job();

        $job->status = $request->status;
        $job->date = $request->date;
        $job->company_id = $request->company_id;
        $job->user_id = $request->user_id;

        $job->save();

        return 'Ok';
    }

    public function edit(Request $request, $id) {
        $job = Job()::findOrFail($id);

        $job->status = $request->status;

        $job->save();

        return 'Ok';
    }
}
