<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'frequency' => 'required',
            'start_date' => 'required|date|after_or_equal:today',
            'days' => 'required|array|min:1',
            'time' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()], 400);
        }

        // Save to database
        Appointment::create([
            'frequency' => $request->frequency,
            'start_date' => $request->start_date,
            'days' => $request->days,
            'time' => $request->time,
            'notes' => $request->notes,
        ]);

        return response()->json(['success' => true, 'message' => 'Appointment scheduled successfully!']);
    }
}