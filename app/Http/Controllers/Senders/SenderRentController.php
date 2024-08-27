<?php

namespace App\Http\Controllers\Senders;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;
use App\Mail\Senders\RentMail;
use App\Actions\TelegramSendAction;

use App\Http\Requests\Senders\RentFormRequest;

class SenderRentController extends Controller
{
    public function send_rent(RentFormRequest $request, TelegramSendAction $tgsender) {
        $data = $request->validated();


        $tmp = $tgsender->handle("<b>Оренда оборудования</b>\n\rИмя: ".$data['product']."\n\rТелефон: ".$data['phone']);


        Mail::to(explode(",",config('consultation.mailadresat')))->send(new RentMail($data));

        return redirect()->route('thencs_consult');
    }

    public function show_thencs() {
        return view('mail.consultation.thencs');
    }
}
