@extends('nova-faqs::layouts.master')

@section('content')

    <h1 class="text-7xl mb-10">FAQs</h1>

    <section>
        @foreach($faqs as $faq)
            <div class="mb-10">
                <h2 class="text-4xl mb-5">{{ $faq->question }}</h2>
                <p class="text-xl">{{ $faq->answer }}</p>
            </div>
        @endforeach
    </section>

@endsection
