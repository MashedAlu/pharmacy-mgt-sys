<h1>Inventory</h1>
<h2>List of drugs</h2>
<br>
<h4>ID | Name | Med type | Expiry date | In stock</h4>
@foreach ($list as $id => $l)
    <h4>{{$id}} {{$l['name']}} | {{$l['medtype']}} | {{$l['expiry']}} | {{$l['in-stock']}} | </h4>
@endforeach
<a href="/">Back to Home</a>