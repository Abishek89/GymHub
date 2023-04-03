<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMIController extends Controller
{
    public function calculate(Request $request)
    {
        // Validate form input
        $request->validate([
            'age' => 'required|integer|min:0|max:120',
            'height' => 'required|numeric|min:1|max:300',
            'weight' => 'required|numeric|min:1|max:500',
            'sex' => 'required|in:male,female',
        ]);
        
        // Calculate BMI
        $height_m = $request->height / 100;
        $bmi = $request->weight / ($height_m ** 2);
        
        // Adjust BMI for age and sex
        if ($request->sex == "male") {
            $bmi -= $request->age < 30 ? 0.5 : 0.3;
        } else {
            $bmi += $request->age < 30 ? 0.3 : 0.5;
        }
        
        // Return view with results
        return view('frontend.bmi-calculator', [
            'age' => $request->age,
            'height' => $request->height,
            'weight' => $request->weight,
            'sex' => $request->sex,
            'frontend.bmi-calculator' => round($bmi, 2),
        ]);
    }
}
