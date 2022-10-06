<template>
    <div class="flex">
        <selectUser />
        <chatBox />
    </div>
</template>

<script>
// @ is an alias to /src
import chatBox from "@/components/ChatBox.vue";
import selectUser from "@/components/SelectUser.vue";

export default {
    components: {
        chatBox,
        selectUser,
    },
};
</script>
