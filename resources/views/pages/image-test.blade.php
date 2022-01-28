@extends('layouts.theme')
@section('content')
<section id="image-test">
    <div id="img-container" style="width: 400px; height: 300px">
        <img src="https://magictoolbox.sirv.com/images/magiczoom/freetrainer5-1.jpg?profile=mz-ft5" alt=""/>
    </div>
    <script>
        var options = {
            width: 400, // required
            height: 300,
            scale: 1.5,
            zoomWidth: 500,
            offset: {vertical: 0, horizontal: 10}
            // more options here
        };
        new ImageZoom(document.getElementById("img-container"), options);
    </script>
</section>
@endsection
