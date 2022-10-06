<template>
    <div class="w-[300px] m-1 block border-2 border-solid border-slate-600">
        <h1
            class="text-center border-b-2 border-solid border-b-slate-300 py-1 px-1"
        >
            Select User
        </h1>
        <div class="h-96 px-5">
            <div>
                <!-- other people -->
                <!-- self -->
                <div
                    class="mr-[10%] w-fit pr-9 border-solid py-1 px-2 mt-3 border-slate-700"
                >
                    <div class="mb-3 border-spacing-2 w-[250px]">
                        <a href="" class="flex hover:bg-slate-200 w-full h-14">
                            <div>
                                <img
                                    :src="userImage"
                                    alt=""
                                    class="rounded-full w-9 mr-2"
                                />
                            </div>
                            <div>
                                <p class="text-base text-slate-800 font-bold">
                                    Name
                                </p>
                                <p class="text-sm text-slate-500">
                                    Last Message
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            users: [],
            userImage: "",
            shortName: "",
        };
    },
    methods: {
        makeProfileFromName(name) {
            let names = name.split(" ", name);
            names.forEach((name) => {
                this.shortName += name[0];
            });

            this.userImage = `https://ui-avatars.com/api/?name=${name}&background=006700&color=fff`;
        },
    },
    mounted() {
        this.makeProfileFromName("Admin");

        Echo.channel("test-event").listen("HaloBro", (data) => {
            console.log(data);
        });
    },
};
</script>
