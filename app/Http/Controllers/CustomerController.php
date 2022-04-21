<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){

        return view('customer.index');
    }

    public function bank_manual(){

        return view('customer.bank-manual');
    }

    public function lead_bank_manual(){

        return view('customer.lead-bank-manual');
    }

    public function upazila_manual(){

        return view('customer.upazila-manual');
    }

    public function inatall_element(){

        return view('customer.install-element');
    }

    public function farmar_manual(){

        return view('customer.farmar-manual');
    }

    public function administrative_manual(){

        return view('customer.administrative-manual');
    }

    //===================Customer Dashboard========================

    public function customer_dashboard(){
        return view('customer.dashboard.customerDashboard');
    }
}
