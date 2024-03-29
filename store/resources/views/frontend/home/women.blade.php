@extends('layouts.master')
@section('title', trans('home.women_shoes', ['name' => $categoryName]))
@section('content')

<div class="row">
	<div class="col-lg-3">
		<h3 class="text-uppercase mb-4">{{ trans('home.women') }}</h3>
		<div class="list-group list-group-flush">
			@foreach ($categories as $category)
			<a href="{{ route('category.women', $category->id) }}" class="list-group-item d-flex justify-content-between align-items-center list-group-item-action">
				{{ $category->name }}
			</a>
			@endforeach
		</div>
	</div>
	<div class="col-lg-9 tab-content">
		<div class="row">
			<div class="col-md-12">
				<h3 class="text-uppercase float-left mb-4">{{ trans('home.women_shoes', ['name' => $categoryName]) }} ({{ count($products) }})</h3>
				<div class="dropdown float-right mb-4">
					<button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						{{ trans('home.sort') }}
					</button>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
						<button class="dropdown-item decreaseAscending" type="button">{{ trans('home.price') }}: max</button>
						<button class="dropdown-item priceAscending" type="button">{{ trans('home.price') }}: min</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row results">
			@if ($products->isEmpty())
			<div class="col-md-12 text-center"><p>{{ trans('home.empty') }}</p></div>
			@else
			@foreach ($products as $product)
			<div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 results-row">
				<div class="card card-product h-100 text-center">
					<a href="{{ route('product.show', $product->id) }}">
						<img class="card-img-top" src="{{ asset('images/product/' . json_decode($product->image, true)[0]) }}" alt="{{ $product->name }}">
					</a>
					<div class="card-body">
						<h5 class="card-title m-0 p-0">
							<small>
								<a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a>
							</small>
						</h5>
						<p class="card-text m-0 p-0">
							{{ count($product->colors) }} {{ trans('home.colors') }} | {{ count($product->sizes) }} {{ trans('home.sizes') }}
						</p>
						<p class="card-text m-0 p-0 price">€{{ $product->price }}</p>
					</div>
				</div>
			</div>
			@endforeach
			@endif
		</div>
		<div class="d-flex justify-content-center">{{ $products->links() }}</div>
	</div>
</div>
<!-- Sort -->
<script type="text/javascript">
	var ascending = false;
	var decrease = true;
	// Convert $ to string ''
	var convertToNumber = function(value) {
		return parseFloat(value.replace('€', ''));
	}
	// Sort the price is ascending
	$('.tab-content').on('click', '.priceAscending', function() {
		var sorted = $('.results-row').sort(function(a, b) {
			return (ascending ==
				(convertToNumber($(a).find('.price').html()) < 
					convertToNumber($(b).find('.price').html()))) ? 1 : -1;
		});
		$('.results').html(sorted);
	});
	// Sort the price is decrease
	$('.tab-content').on('click', '.decreaseAscending', function() {
		var sorted = $('.results-row').sort(function(a, b) {
			return (decrease ==
				(convertToNumber($(a).find('.price').html()) < 
					convertToNumber($(b).find('.price').html()))) ? 1 : -1;
		});
		$('.results').html(sorted);
	});
</script>

@endsection