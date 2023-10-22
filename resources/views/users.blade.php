<h1>users detail</h1>




@foreach ($id as $key=>$value)
<h2>{{$value['name']}}</h2>
<h2>{{$value['roll']}}</h2>
<h2>{{$value['class']}}</h2>    
@endforeach