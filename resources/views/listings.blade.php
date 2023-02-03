<h1>{{$header ?? 'meow'}}</h1>
@foreach ($listings as $listing)
    <h2>{{$listing['title']}}</h2>
    <p>{{$listing['description']}}</p>
@endforeach
