<template>
    <div id="app">
        <button :btn-text="text" />
    </div>
</template>

<script>
    import Button from "./Button";
    export default {
        name: "App",
        data: () => ({
            text: "notx"
        }),
        components: {
            Button
        }
    }
</script>
