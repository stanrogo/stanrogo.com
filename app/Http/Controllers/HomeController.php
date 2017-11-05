<?php


namespace App\Http\Controllers;

use Contentful\Delivery\Client as DeliveryClient;

class HomeController extends Controller{

    private $client;

    /**
     * HomeController constructor.
     *
     * @param DeliveryClient $client - the contentful delivery client
     */

    public function __construct(DeliveryClient $client){

        $this->client = $client;
    }

    /**
     * Retrieve a view containing every piece of available content
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function showIndex(){

        $entry = $this->client->getEntry('3byYBY4ItOeKGgIYEu6IUs');
        $cv = $this->client->getAsset('5Ub1HnzdQsaks0QaWy20Y6');

        return view('pages.home', [
            'introduction' => $entry,
            'cv' => $cv
        ]);
    }
}