<h1>{{ $headings }}</h1>
@if(count($listings) == 0)
    <p>No Listings Found</p>
@endif
@foreach($listings as $listing)
    <a href="/listings/{{$listing['id']}}"><h2>{{ $listing['title']}}</h2></a>
    <p>{{ $listing['description']}}</p>
@endforeach
