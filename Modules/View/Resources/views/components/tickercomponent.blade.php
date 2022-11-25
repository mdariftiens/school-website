@foreach($tickerRows as $tickerRow)
    <a href="{{ $tickerRow->ticker_link }}"> * {{ $tickerRow->{getLanguage().'_title'} }}</a>
@endforeach

