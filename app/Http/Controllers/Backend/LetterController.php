<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Letter;
use App\Models\FilesDetails;
use Illuminate\Support\Facades\Auth;


class LetterController extends Controller
{
    public function letterView() {
        $data['current_user'] = Auth::user();
        $data['allData'] = Letter::all();
        return view('backend.letter.letter_view', $data);
    }

    public function letterAdd() {
        $data['files'] = FilesDetails::all();
        return view('backend.letter.letter_add', $data);
    }
}
 