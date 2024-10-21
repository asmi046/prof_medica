<?php

namespace App\Http\Controllers\Senders;

use Illuminate\Http\Request;

use App\Mail\Senders\BayMail;

use App\Mail\Senders\RentMail;
use App\Actions\TelegramSendAction;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Senders\BayFormRequest;
use App\Http\Requests\Senders\RentFormRequest;

class SenderRentController extends Controller
{
    public function send_rent(RentFormRequest $request, TelegramSendAction $tgsender) {
        $data = $request->validated();


        $tmp = $tgsender->handle("<b>Аренда оборудования</b>\n\rИмя: ".$data['product']."\n\rТелефон: ".$data['phone']."\n\rКоличество дней: ".$data['deys']."\n\rСумма: ".$data['summ']." р.");

        try {
            Mail::to(explode(",",config('consultation.mailadresat')))->send(new RentMail($data));
        } catch (\Throwable $e) {

        }


        return true;
    }

    public function send_bay(BayFormRequest $request, TelegramSendAction $tgsender) {
        $data = $request->validated();


        $tmp = $tgsender->handle("<b>Покупка оборудования</b>\n\rИмя: ".$data['product']."\n\rТелефон: ".$data['phone']."\n\rНеобходимое количество: ".$data['count']);


        try {
            Mail::to(explode(",",config('consultation.mailadresat')))->send(new BayMail($data));
        } catch (\Throwable  $e) {

        }

        return true;
    }

    public function show_thencs() {
        return view('mail.senders.thencs');
    }
}
