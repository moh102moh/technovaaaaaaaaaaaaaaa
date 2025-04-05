<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request as ConsultationRequest;
class RequestController extends Controller
{
        public function store(request $request)
        {
            // التحقق من صحة البيانات
            $validatedData = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name'  => 'required|string|max:255',
                'email'      => 'required|email|max:255',
                'phone'      => 'required|string|max:20',
                'message'    => 'required|string',
            ]);

            // تخزين البيانات في قاعدة البيانات
            ConsultationRequest::create($validatedData);

            // إعادة التوجيه مع رسالة نجاح
            return redirect(url()->previous() . '#contact')
           ->with('success', 'Your request has been submitted successfully!');
}
    }
