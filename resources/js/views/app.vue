<template>
    <div>
        <h1>Vue Router Demo App</h1>

        <p>
            <router-link :to="{ name: 'page1' }">Go to Page 1</router-link> |
            <router-link :to="{ name: 'page2' }">Go to Page 2</router-link>
        </p>

        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
const default_layout = "default";

export default {
    computed: {},
    data() {
        return {
            message: "Hello World"
        };
    }
};
</script>
