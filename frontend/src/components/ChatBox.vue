<template>
    <div class="w-[450px] m-1 block border-2 border-solid border-slate-600">
        <h1
            class="text-center border-b-2 border-solid border-b-slate-300 py-1 px-1"
        >
            Name
        </h1>
        <div class="h-96 px-5 overflow-scroll">
            <div>
                <!-- other people -->
                <!-- self -->
                <div
                    class="border-2 w-fit text-right ml-auto pl-9 border-solid py-1 px-2 mt-3 border-slate-700"
                >
                    <p class="text-sm text-slate-500">Name</p>
                    <p class="text-sm text-slate-800">Message Here</p>
                </div>
                <div
                    class="border-2 mr-[10%] w-fit pr-9 border-solid py-1 px-2 mt-3 border-slate-700"
                >
                    <p class="text-sm text-slate-500">Name</p>
                    <p class="text-sm text-slate-800">Message Here</p>
                </div>
            </div>
        </div>
        <div class="border-t-2 border-solid border-t-slate-300">
            <div class="flex">
                <input
                    v-on:keyup="checkSend"
                    class="w-[85%] py-5"
                    type="text"
                />
                <button class="bg-green-500 w-[200px] block">Send</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>
