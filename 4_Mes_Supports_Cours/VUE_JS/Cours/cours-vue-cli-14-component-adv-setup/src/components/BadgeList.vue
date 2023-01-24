<template>
    <section>
        <h2>Badges dispo</h2>
        <ul>
            <li>
                <base-badge type="nul" caption="NUL"></base-badge>
            </li>
            <li>
                <base-badge type="premium" caption="PREMIUM"></base-badge>
            </li>
            <li>
                <base-badge type="toto" caption="toto"></base-badge>
            </li>
        </ul>
    </section>
</template>

<script>
export default {
    components: {

    },
}
</script>

<style>
ul {
list-style: none;
margin: 0;
padding: 0;
display: flex;
flex-direction: row;
}

li {
margin-right: 1rem;
}
</style>