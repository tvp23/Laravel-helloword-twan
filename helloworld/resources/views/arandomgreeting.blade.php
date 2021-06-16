@extends('layouts.app')

@section('content')
    <div id="app" class=" h-100 d-flex justify-content-center align-items-center">
        <h2>Greeting of the day:</h2>
        <a-random-greeting :greetingText=""></a-random-greeting>
        <p>{{$greeting}}</p>
    </div>
@endsection
<script>
    const app = new Vue({
        el: '#app',
        data() {
            return{
                test: 'fds'
            }
        }
    });
</script>
