@php 

$get_value="javascript";
$get_array= ["komal","kautailya","vaishanvi","pratibha","swati"];

@endphp
<script>
    var get= @json($get_value);
    console.log(get);
    var array_data= @json($get_array);
    array_data.forEach( function(injg){
        console.log(injg);

    }
        
    );
</script>