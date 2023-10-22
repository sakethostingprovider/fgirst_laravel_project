<h1>our first paget it laravel</h1>
{{2+5}}
<br><br>
{{"hello php"}}
<br><br>
{{"<h1> hello world</h1>"}}
<br><br>
{!!"<h1> hello world</h1>"!!}
<br><br>
{{-- {!'<script> alert('123')</script>'!} --}}
<br><br>
@php 
$name = ['saket','manish','ravi'];
@endphp
<ul>
@foreach ($name as $key) 
 <li>{{$key}}</li>
 @endforeach  

</ul>