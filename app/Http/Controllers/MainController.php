<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Models\AdminNavbar;
use App\Models\AdminHome;
use App\Models\AdminAbout;
use App\Models\AdminClietnsSection;
use App\Models\AdminServis;
use App\Models\AdminTeam;
use App\Models\AdminContact;
use App\Models\Gallery;
use App\Models\Pricing;
use App\Models\Faq;
use App\Models\PointGallery;
use App\Models\AdminTeamIcons;
use App\Models\portfoliodetails;







class MainController extends Controller
{
    public function welcome ()
{
    $home = new AdminHome();
    $about = new AdminAbout();
    $clietns = new AdminClietnsSection();
    $servis = new AdminServis();
    $team = new AdminTeam();
    $contact = new AdminContact();
    $gallery = new Gallery();
    $pricing = new Pricing();
    $faq = new Faq();
    $point = new PointGallery();
    $icons = new AdminTeamIcons();

    return view('welcome', ['home' => $home->all(), 'about' => $about->all(),'clietns' => $clietns->all(),'servis' => $servis->all(),'team' => $team->all(),'contact' => $contact->first(),'gallery' => $gallery->all(), 'pricing' => $pricing->all(), 'faq' => $faq->all(), 'point' => $point->all(), 'icons' => $icons->all()]);
}

public function contact()
    {
    $contact = new AdminContact();
    return view('contact', ['contact' => $contact->first()]);
    }

    public function send_book(Request $data) {
        $valid = $data->validate([
            'firstName' => ['required'],
            'lastName' => ['required'],
            'tel' => ['required'],
            'date_start' => ['required'],
            'date_end' => ['required'],
            'col_people' => ['required'],
            'nomer' => ['required'],
        ]);

        $token = "5509141318:AAHUhJUGaRw_NXx30gsUAJNCtaCysymSA0Q";
        $chat_id = "-727410696";
        $arr = array(
            'Время: ' => date('Y-m-d').' - '.date('H:i'),
            'Номер: ' => $data->input('nomer'),
            'Имя: ' => $data->input('firstName'),
            'Фамилия: ' => $data->input('lastName'),
            'Телефон: ' => $data->input('tel'),
            'Дата заезда: ' => $data->input('date_start'),
            'Дата выезда: ' => $data->input('date_end'),
            'Количество людей: ' => $data->input('col_people'),
        );

        $txt = '';

        foreach($arr as $key => $value) {
            $txt = $txt."<b>".$key."</b> ".$value."%0A";    
        };

        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

        if($sendToTelegram) {
            return 1;
        } else {
            return 2;
        }
    }
    public function portfoliodetails()
    {
    $portfoliodetails = new portfoliodetails();
    $team = new AdminTeam(id);

    return view('portfoliodetails', ['portfoliodetails' => $portfoliodetails->all(),'team' => $team->find(id),]);
    }

}

// https://api.telegram.org/bot5509141318:AAHUhJUGaRw_NXx30gsUAJNCtaCysymSA0Q/getUpdates
