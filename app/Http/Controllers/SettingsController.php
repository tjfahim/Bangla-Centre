<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function showSettingsForm()
    {
        $settings = Settings::find(1);
        return view('backend.settings.index', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        $settings = Settings::find(1);
        $validatedData = $request->validate([
            'stripe_key' => 'required',
            'stripe_secret' => 'required',
            'paypal_client_id' => 'required',
            'paypal_client_secret' => 'required',
        ]);

        $settings->stripe_key = $validatedData['stripe_key'];
        $settings->stripe_secret = $validatedData['stripe_secret'];
        $settings->paypal_client_id = $validatedData['paypal_client_id'];
        $settings->paypal_client_secret = $validatedData['paypal_client_secret'];
        $settings->save();


        if ($settings) {
          
            return redirect()->route('admin.settings')->with('success', 'Settings updated successfully');
        }
    
        return redirect()->route('admin.settings')->with('error', 'Settings not found');
    }
  


   


}
