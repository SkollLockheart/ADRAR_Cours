<template>
<span class="badge" :class="classes">{{ caption }}</span>
</template>

<script>
export default {
props: ['type', 'caption'],
computed: {
    classes() {
    return {
        'badge--premium': this.type === 'premium',
        'badge--nul': this.type === 'nul',
    };
    },
},
};
</script>

<style>
.badge {
display: inline-block;
padding: 0.5rem 1rem;
border-radius: 30px;
background-color: #ccc;
color: #2e2e2e;
}

.badge--nul {
background-color: #ee1414;
color: white;
}

.badge--premium {
background-color: #7ae088;
color: white;
}
</style>