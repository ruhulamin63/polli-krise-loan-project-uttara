<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use App\Models\User;

class IndexController extends Controller
{
    public function index(){

        $all_apply_count = User::where('user_type', 2)
                                ->where('activeStatus',1)
                                ->count('id');

        $info_verify = User::where('info_verify', 1)
                            ->where('user_type',2)
                            ->where('activeStatus',1)
                            ->count('id');

        $loan_verify = User::where('loan_verify', 1)
                            ->where('user_type',2)
                            ->where('activeStatus',1)
                            ->count('id');

        $delivery_loan = User::where('delivery_loan',1)
                            ->where('user_type',2)
                            ->where('activeStatus',1)
                            ->count('id');

        $total_delivery_loan = User::where('info_verify', 1)
                                    ->where('loan_verify', 1)
                                    ->where('delivery_loan',1)
                                    ->where('user_type',2)
                                    ->where('activeStatus',1)
                                    ->count('id');

        return view('customer.index', compact('all_apply_count', 'info_verify', 'loan_verify', 'delivery_loan', 'total_delivery_loan'));
    }

    // public function post_interest(Request $request){

    //     $i = ($request->principle)*($request->interest)/100*($request->month / 12);
    //     $total = $request->principle + $i;
    //     //dd($total);

    //     $result = $total/($request->month);

    //     return redirect()
    //     ->back()
    //     ->with([
    //         'result' => $result,
    //     ]);
    // }

    public function bank_manual(){
        $all_apply_count = User::where('user_type', 2)
                                ->where('activeStatus',1)
                                ->count('id');

        $info_verify = User::where('info_verify', 1)
                            ->where('user_type',2)
                            ->where('activeStatus',1)
                            ->count('id');

        $loan_verify = User::where('loan_verify', 1)
                            ->where('user_type',2)
                            ->where('activeStatus',1)
                            ->count('id');

        $delivery_loan = User::where('delivery_loan',1)
                            ->where('user_type',2)
                            ->where('activeStatus',1)
                            ->count('id');

        $total_delivery_loan = User::where('info_verify', 1)
                                    ->where('loan_verify', 1)
                                    ->where('delivery_loan',1)
                                    ->where('user_type',2)
                                    ->where('activeStatus',1)
                                    ->count('id');

        return view('customer.bank-manual', compact('all_apply_count', 'info_verify', 'loan_verify', 'delivery_loan', 'total_delivery_loan'));
    }

    public function lead_bank_manual(){
        $all_apply_count = User::where('user_type', 2)
                                ->where('activeStatus',1)
                                ->count('id');

        $info_verify = User::where('info_verify', 1)
                            ->where('user_type',2)
                            ->where('activeStatus',1)
                            ->count('id');

        $loan_verify = User::where('loan_verify', 1)
                            ->where('user_type',2)
                            ->where('activeStatus',1)
                            ->count('id');

        $delivery_loan = User::where('delivery_loan',1)
                            ->where('user_type',2)
                            ->where('activeStatus',1)
                            ->count('id');

        $total_delivery_loan = User::where('info_verify', 1)
                                    ->where('loan_verify', 1)
                                    ->where('delivery_loan',1)
                                    ->where('user_type',2)
                                    ->where('activeStatus',1)
                                    ->count('id');

        return view('customer.lead-bank-manual', compact('all_apply_count', 'info_verify', 'loan_verify', 'delivery_loan', 'total_delivery_loan'));
    }

    public function upazila_manual(){
        $all_apply_count = User::where('user_type', 2)
                                ->where('activeStatus',1)
                                ->count('id');

        $info_verify = User::where('info_verify', 1)
                            ->where('user_type',2)
                            ->where('activeStatus',1)
                            ->count('id');

        $loan_verify = User::where('loan_verify', 1)
                            ->where('user_type',2)
                            ->where('activeStatus',1)
                            ->count('id');

        $delivery_loan = User::where('delivery_loan',1)
                            ->where('user_type',2)
                            ->where('activeStatus',1)
                            ->count('id');

        $total_delivery_loan = User::where('info_verify', 1)
                                    ->where('loan_verify', 1)
                                    ->where('delivery_loan',1)
                                    ->where('user_type',2)
                                    ->where('activeStatus',1)
                                    ->count('id');

        return view('customer.upazila-manual', compact('all_apply_count', 'info_verify', 'loan_verify', 'delivery_loan', 'total_delivery_loan'));
    }

    public function inatall_element(){
        $all_apply_count = User::where('user_type', 2)
                                ->where('activeStatus',1)
                                ->count('id');

        $info_verify = User::where('info_verify', 1)
                            ->where('user_type',2)
                            ->where('activeStatus',1)
                            ->count('id');

        $loan_verify = User::where('loan_verify', 1)
                            ->where('user_type',2)
                            ->where('activeStatus',1)
                            ->count('id');

        $delivery_loan = User::where('delivery_loan',1)
                            ->where('user_type',2)
                            ->where('activeStatus',1)
                            ->count('id');

        $total_delivery_loan = User::where('info_verify', 1)
                                    ->where('loan_verify', 1)
                                    ->where('delivery_loan',1)
                                    ->where('user_type',2)
                                    ->where('activeStatus',1)
                                    ->count('id');

        return view('customer.install-element', compact('all_apply_count', 'info_verify', 'loan_verify', 'delivery_loan', 'total_delivery_loan'));
    }

    public function farmar_manual(){
        $all_apply_count = User::where('user_type', 2)
                                ->where('activeStatus',1)
                                ->count('id');

        $info_verify = User::where('info_verify', 1)
                            ->where('user_type',2)
                            ->where('activeStatus',1)
                            ->count('id');

        $loan_verify = User::where('loan_verify', 1)
                            ->where('user_type',2)
                            ->where('activeStatus',1)
                            ->count('id');

        $delivery_loan = User::where('delivery_loan',1)
                            ->where('user_type',2)
                            ->where('activeStatus',1)
                            ->count('id');

        $total_delivery_loan = User::where('info_verify', 1)
                                    ->where('loan_verify', 1)
                                    ->where('delivery_loan',1)
                                    ->where('user_type',2)
                                    ->where('activeStatus',1)
                                    ->count('id');

        return view('customer.farmar-manual', compact('all_apply_count', 'info_verify', 'loan_verify', 'delivery_loan', 'total_delivery_loan'));
    }

    public function administrative_manual(){

        $all_apply_count = User::where('user_type', 2)
                                ->where('activeStatus',1)
                                ->count('id');

        $info_verify = User::where('info_verify', 1)
                            ->where('user_type',2)
                            ->where('activeStatus',1)
                            ->count('id');

        $loan_verify = User::where('loan_verify', 1)
                            ->where('user_type',2)
                            ->where('activeStatus',1)
                            ->count('id');

        $delivery_loan = User::where('delivery_loan',1)
                            ->where('user_type',2)
                            ->where('activeStatus',1)
                            ->count('id');

        $total_delivery_loan = User::where('info_verify', 1)
                                    ->where('loan_verify', 1)
                                    ->where('delivery_loan',1)
                                    ->where('user_type',2)
                                    ->where('activeStatus',1)
                                    ->count('id');

        return view('customer.administrative-manual', compact('all_apply_count', 'info_verify', 'loan_verify', 'delivery_loan', 'total_delivery_loan'));
    }
}
