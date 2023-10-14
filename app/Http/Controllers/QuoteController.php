<?php

namespace App\Http\Controllers;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quote $quote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quote $quote)
    {
        //
    }
}
