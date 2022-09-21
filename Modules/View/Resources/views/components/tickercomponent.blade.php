@foreach($tickerRows as $tickerRow)
    <a href="{{ $tickerRow->ticker_link }}"> * {{ $tickerRow->bangla_title }}</a>
@endforeach

