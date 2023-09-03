<div class="relative text-black  p-5"> <div class="text-xl "> Create Course </div>
    <form class="p-3 " method="POST" wire:submit="store"  enctype="multipart/form-data" >
        @csrf
        <div class="">

            <div class="grid gap-6 mb-6 w-full md:grid-cols-3 text-black">
                <div>
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="text" wire:model="title"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  >
                    <div class="h-1">
                        @error('title') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Background Image</label>
                    <select wire:model="bg_img"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected value="https://static.frontendmasters.com/assets/courses/2023-08-13-node-js-v3/thumb.webp">Nodejs</option>
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

                    <select  wire:model="paid_course" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="true">Yes</option>
                        <option value="false">No</option>

                    </select>
                </div>
                <div>
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Duration</label>
                    <input wire:model="duration" type="time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >

                    <div class="h-1">
                        @error('duration') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div>
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Topic</label>

                    <select wire:model="tag"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="rust">Rust</option>
                        <option value="aws">AWS</option>
                        <option value="typescript">Typescript</option>
                        <option value="algorithm">Algorithm</option>
                        <option value="fullStack">Full Stack</option>
                        <option value="nodejs">Node.js</option>
                        <option value="buildtool">Build Tools</option>
                        <option value="nextjs">Next.js</option>
                        <option value="testing">Testing</option>
                        <option value="performance">Performance</option>
                    </select>
                </div>
                <div>
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Duration</label>
                    <input name="duration" type="time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                </div>
            </div>

            <div>

                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <textarea type="text" wire:model="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=""></textarea>

            </div>
            <div
            >

            </div>

            <div class="text-black mt-2">


            </div>

        </div>
        <div class="flex  mt-4">

        <button class="px-2 py-1 bg-blue-500 rounded-md text-white" type="submit">Submit</button>
        </div>
    </form>
</div>

