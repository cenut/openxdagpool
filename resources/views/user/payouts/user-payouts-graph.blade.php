@extends('layouts.app')

@section('title')
	Payouts ({{ $authUser->display_nick }})
@endsection

@section('hero')
	<section class="hero is-primary">
		<div class="hero-body">
			<div class="container">
				<h1 class="title">
					Payout history
				</h1>
				<h2 class="subtitle">
					Coins earned at this pool
				</h2>
			</div>
		</div>
	</section>
@endsection

@section('content')
	<div class="miners-view">
		<div class="columns is-marginless is-centered">
			<div class="column is-7">
				<h4 class="title is-4">User {{ $authUser->display_nick }}</h4>

				<div class="tabs">
					<ul>
						<li class="is-active"><a href="{{ route('user.payouts.graph') }}">Graph</a></li>
						<li><a href="{{ route('user.payouts.listing') }}">Listing</a></li>
					</ul>
				</div>

				<div id="graph"></div>

				<a class="button is-primary is-pulled-right" href="{{ route('user.payouts.export-graph') }}" target="_blank">
					<span class="icon"><i class="fa fa-file-excel-o"></i></span>
					<span>Export</span>
				</a>

				<a class="button" href="{{ route('miners') }}">
					<span>Back</span>
				</a>
				<hr>
				<p><span class="important">Note:</span> Payouts update approximately every 4 hours. Payouts are sent immediately after they are ready.</p>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	<script>
		var payoutView = new payoutView({});
	</script>
@endsection
