<template>
    <div>
        <button @click="hello">hello</button>
    </div>
</template>

<script>
import axios from "axios";

export default {
    // created() {
    //     this.hello();
    // },
    // methods: {
    //     async hello() {
    //         const res = await axios.get("/api/hello");
    //         console.log(res);
    //     },
    // },
    methods: {
        async hello() {
            try {
                const resp = await axios.get("/api/hello");
                console.log(resp);
            } catch (error) {
                console.error("error: ", error);
            }
        },
    },
};
</script>
