<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Services\CountryService;


class ClientController extends Controller
{
    protected $countries;
    public function __construct(CountryService $countries)
    {
        $this->countries = $countries;
    }

    public function index(){
        $data = Client::all();
        $countries = $this->countries->showAll();

        return view('clients', ['clients' => $data, 'countries' => $countries]);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'zip' => 'required|string',
            'country' => 'required|string'
        ]);

        $res = Client::create($request->all());

        return redirect()->route('clients.index');
    }

    public function update(Request $request, $id){

        $request->validate([
            'name' => 'string|max:255',
            'address' => 'string|max:255',
            'city' => 'string|max:255',
            'zip' => 'string|max:100',
            'country' => 'string|max:100'
        ]);

        $client = Client::findOrFail($id);
        $client->update($request->all());

        return redirect()->route('clients.index');
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('clients.index');
    }

    public function search(Request $request){
        $query = $request->input('query');

        $results = Client::where('name', 'like', '%' . $query . '%')
            ->orWhere('city', 'like', '%' . $query . '%')
            ->orWhere('country', 'like', '%' . $query . '%')
            ->get();
    }
}
