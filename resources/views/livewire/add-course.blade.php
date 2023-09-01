<div class="relative  p-5">
    <div class="text-xl text-black ">
        Create Course
    </div>

    <form class="p-3 " method="POST" action="/mycourse" enctype="multipart/form-data" >
        @csrf
        <div class="">

            <div class="grid gap-6 mb-6 w-full md:grid-cols-3">
                <div>
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="text" name="title"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Background Image</label>
                    <select name="bg_img"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="https://static.frontendmasters.com/assets/courses/2023-08-13-node-js-v3/thumb.webp">Nodejs</option>
                        <option value="https://static.frontendmasters.com/assets/courses/2023-06-13-sveltekit/thumb.webp">Svelte</option>
                        <option value="https://static.frontendmasters.com/assets/courses/2023-04-25-rust-ts-devs/thumb.webp">Typescript</option>
                        <option value="https://static.frontendmasters.com/assets/courses/2023-01-09-reactivity-solidjs/thumb.webp">Solid</option>
                        <option value="https://static.frontendmasters.com/assets/courses/2023-01-09-reactivity-solidjs/thumb.webp">AWS</option>
                        <option value="https://static.frontendmasters.com/assets/courses/2021-05-11-rust/thumb.webp">Rust</option>
                        <option value="https://static.frontendmasters.com/assets/courses/2021-05-11-rust/thumb.webp">ChatApi</option>

                    </select>
                </div>

                <div>
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paid Course</label>

                    <select name="paid_course" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="true">Yes</option>
                        <option value="false">No</option>

                    </select>
                </div>
                <div>
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Duration</label>
                    <input name="duration" type="time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Save</button>
    </form>
</div>
