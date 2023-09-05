<div class="relative text-black  p-5"> <div class="text-xl "> Edit Course </div>
    <form class="p-3 " method="POST" wire:submit="update"  enctype="multipart/form-data" >
        @csrf
        <div class="">


            <div class="grid gap-6 mb-6 w-full md:grid-cols-3 text-black">
                <div>
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="text" wire:model="course.title"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  >
                    <div class="h-1">
                        @error('title') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Background Image</label>
                    <select wire:model="course.bg_img"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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

                    <select  wire:model="course.paid_course" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="true">Yes</option>
                        <option value="false">No</option>

                    </select>
                </div>
                <div>
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Duration</label>
                    <input wire:model="course.duration" type="time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >

                    <div class="h-1">
                        @error('duration') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div>
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Topic</label>

                    <select wire:model="course.tag"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="Rust">Rust</option>
                        <option value="Javascript">Javascript</option>
                        <option value="Typescript">Typescript</option>
                        <option value="Algorithm">Algorithm</option>
                        <option value="Full Stack">Full Stack</option>
                        <option value="Node.js">Node.js</option>
                        <option value="Build Tools">Build Tools</option>
                        <option value="Deployment">Deployment</option>
                    </select>
                </div>
            </div>

            <div>

                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course Description</label>
                <textarea type="text" wire:model="course.description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=""></textarea>

            </div>

            <div class="mt-3">

                <label for="course_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <textarea type="text" wire:model="course.course_description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=""></textarea>

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
