<template>
    <div
        class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8"
    >
        <div class="w-[450px] m-1 block border-2 border-solid border-slate-600">
            <h1
                class="text-center border-b-2 border-solid border-b-slate-300 py-1 px-1"
            >
                Login
            </h1>
            <form
                action=""
                class="mt-8 space-y-6 flex justify-center items-center h-[300px]"
            >
                <div>
                    <div>
                        <label for="username" class="block text-center"
                            >Username</label
                        >
                        <input
                            v-model="username"
                            name="username"
                            class="border-2 border-solid border-slate-700 text-center"
                            type="text"
                            required
                        />
                    </div>

                    <div class="my-3">
                        <label for="password" class="block text-center"
                            >Passowrd</label
                        >
                        <input
                            v-model="password"
                            class="border-2 border-solid border-slate-700 text-center"
                            type="password"
                            required
                        />
                    </div>

                    <div>
                        <button
                            type="submit"
                            class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        >
                            <span
                                class="absolute inset-y-0 left-0 flex items-center pl-3"
                            >
                                <!-- Heroicon name: mini/lock-closed -->
                                <svg
                                    class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </span>
                            Sign in
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    created(){
        window.Echo.channel('test-event').listen('.HaloBro', data => {
            console.log(data);
        })
    }
}
</script>
