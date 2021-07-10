@extends('partials.header')

@section('content')

    <section id="breadcrumb" class="container">
        <h4 class=" py-4 text-white">Pharma Products</h4>
    </section>

    <div class="container">


        <div class="row">
            @foreach ($pharma_products as $pharma_product)
                <div class="mb-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="rounded-sm shadow-sm"
                        style="background-image:url('{{ Voyager::image($pharma_product->image) }}');background-size: cover;background-position: center center;width: 100%;height: 210px;">
                    </div>
                    <h2 class="h6 text-white pt-2">
                        {{ $pharma_product->title }}
                    </h2>
                </div>

            @endforeach
        </div>
    </div>
@endsection
