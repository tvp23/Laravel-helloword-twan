@extends('layouts.app')

@section('content')
    <div class=" h-100 d-flex justify-content-center align-items-center">
        <h1>Hello World</h1>
        <example-component></example-component>
        <my-component></my-component>
        <app></app>
    </div>
@endsection
<script>
    import App from "../js/components/App";
    import MyComponent from "../js/components/MyComponent";
    export default {
        components: {App, Button, MyComponent}
    }
</script>
