<?php

namespace App\Http\Controllers;
use Illuminate\Console\Scheduling\Schedule;
use App\Weather;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class WeatherController extends Controller
{
    public function dashboard()
    {
        return view('dashboard')
            ->with('weather', Weather::all());
    }

    public function record()
    {
        $getWeather = Weather::all();
        $city = ['tbilisi','samtredia','batumi','rustavi'];
        foreach ($city as $cities) {

            $url = 'http://api.weatherapi.com/v1/forecast.json';
            $response = [];


            $client = new Client();
            $response = $client->request('GET', $url, [
                'query' => [

                    'key' => config('weatherapi.key'),
                    'q' => $cities,

                ]
            ]);

            $response = json_decode($response->getBody()->getContents(), true);
            $weather = new Weather();
            $weather->georgia_country = $response['location']['name'];
            $weather->celsius = $response['current']['temp_c'];
            $weather->created_at = now();
            $weather->updated_at = now();
            $weather->save();
            }

        }

        public function destroy()
        {
                $getWeather = Weather::all();
                foreach ($getWeather as $forecast) {
                    Weather::destroy($forecast->id);
                }

        }
    }

