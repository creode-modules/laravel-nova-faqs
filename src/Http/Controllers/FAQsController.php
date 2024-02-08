<?php

namespace Creode\LaravelNovaFaqs\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Creode\LaravelNovaFaqs\Repositories\FaqRepository;

class FAQsController extends Controller
{
    public function __construct(protected FaqRepository $faqRepository)
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index()
    {
        $faqs = $this->faqRepository
            ->published()
            ->get();
        return view('nova-faqs::index', compact('faqs'));
    }
}
