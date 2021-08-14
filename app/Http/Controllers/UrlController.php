<?php
namespace App\Http\Controllers;

use GuzzleHttp\Client;

use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\ConnectException;
use Illuminate\Http\Request;
use App\Models\Link;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class UrlController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function create(Request $request)
    {

        try {
            $client = new \GuzzleHttp\Client([
                'base_uri' => $request->url,
                'verify' => false
            ]);
            $random_sequence = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, 5);
            $link = Link::create([
                "original_url" => $request->url,
                "short_url" => $random_sequence
            ]);
             return view("show-url", ['link' => $link]);
        }
        catch (ConnectException $e) {
            return view("error", ["error" => "Ocorreu um erro ao gerar a URL"]);
        }
    }

    public function find($sequence)
    {
        $link = Link::where("short_url", "=", $sequence)->first();
        if(empty($link->all()))
        {
            return "PQP TA VAZIO";
        }
        $url = $link->original_url;
        return redirect()->to((is_null(parse_url($url, PHP_URL_HOST)) ? '//' : '').$url);
    }
}
