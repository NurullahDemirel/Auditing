<?php

namespace App\Http\Controllers\Audit;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuditController extends Controller
{
    public function index($id){
        $audits=User::find($id)->audits;
        return view('audit.index',compact('audits'));
    }

}
