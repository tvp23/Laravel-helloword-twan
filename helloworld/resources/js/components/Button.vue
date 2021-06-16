<template>
    <div>
        <button type="button" class="btn btn-primary">{{ btnText }}</button>
    </div>
</template>
<script>
export default {
    props:{
        btnText : {
            type : String,
            required : true
        }
    }
}
</script>
