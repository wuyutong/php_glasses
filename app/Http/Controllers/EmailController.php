<?php

namespace App\Http\Controllers;

use App\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{

    public function sendEmail(Request $request)
    {
        $email = $request->input('email');
        $model = new Email();
        return $model->insertEmail($email);
    }

    public function getAllEmails()
    {
        $model = new Email();
        return $model->getAllEmail();
    }
}
