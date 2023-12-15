<?php

namespace Creode\LaravelNovaFaqs\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Creode\LaravelNovaFaqs\Entities\Faq;

class FAQsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index()
    {
        $faqs = Faq::published()->get();
        return view('faqs::index', compact('faqs'));
    }
}
