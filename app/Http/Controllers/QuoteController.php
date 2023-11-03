<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuoteStoreRequest;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class QuoteController extends Controller
{
    public function randomQuote(){
        $quote = Quote::inRandomOrder()->first();

        return view('quotes.random_quote',compact('quote'));
    }







    /* ------------------------------------------------------------------------------------------------------- */

    /**
     * Display a listing of the resource.
     */
    public function indexMine()
    {
        $quotes = Quote::where('owner', Auth::id())->orderBy('created_at','desc')->paginate(5);

        return view('quotes.index_mine',compact('quotes'));
    }

    public function index()
    {
        $quotes = Quote::orderBy('created_at','desc')->paginate(5);

        return view('quotes.index',compact('quotes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quotes.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(QuoteStoreRequest $request)
    {
        $quote = new Quote();
        $quote->message = $request->message;
        $quote->author = (empty($request->author))? "Anónimo": $request->author;
        $quote->published_year = $request->published_year;
        $quote->owner = Auth::id();
        $quote->save();

        return redirect(route('quotes.mine'))->with('status','Cita agregada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quote $quote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quote $quote)
    {
        return view('quotes.edit',compact('quote'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quote $quote)
    {
        if(empty($request['author'])){
            $request['author'] = "Anónimo";
        }
        $quote->update($request->all());
        return redirect(route('quotes.mine'))->with('status','Cita actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quote $quote)
    {
        //
    }
}
