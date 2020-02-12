<?php


namespace App\Http\Controllers;


class AboutController
{

    public function about()
    {
        $about = 'about in controller';
        return view('about', [ // ссылка на страничку
            'about' => $about
        ]);
    }

}
