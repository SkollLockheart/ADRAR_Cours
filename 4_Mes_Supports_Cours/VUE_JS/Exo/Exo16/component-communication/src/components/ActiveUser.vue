<template>
    <div class="card text-center text-black">
    <div class="card-header">
        <h4>{{ user.name }}</h4>
    </div>
    <div class="card-body">
        <h3>{{ user.age }} ans</h3>
    </div>

</div>
</template>

<script>
export default {
    name: "active-user",
    props : {
        user: {
            type: Object,
            required: true
        }
    },
};
</script>
