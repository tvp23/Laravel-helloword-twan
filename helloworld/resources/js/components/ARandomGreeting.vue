<template>
    <div id="app">
        <h1>{{greetingText}}</h1>
    </div>
</template>

<script>
export default {
    props:{
        greetingText : {
            type : String,
            required : false
        }
    }
}
</script>

