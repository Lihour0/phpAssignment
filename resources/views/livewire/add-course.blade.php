<div class="relative  p-5">
    <div class="text-xl text-black ">
        Create Course
    </div>

    <form class="p-3 " method="POST" action="/mycourse" wire:submit.prevent enctype="multipart/form-data" >
        @csrf
        <div class="">

            <div class="grid gap-6 mb-6 w-full md:grid-cols-3 text-black">
                <div>
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="text" name="title"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" >
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

                    <select  name="paid_course" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="true">Yes</option>
                        <option value="false">No</option>

                    </select>
                </div>
                <div>
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Duration</label>
                    <input name="duration" type="time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                </div>
                <div>
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Duration</label>
                    <input name="duration" type="time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                </div>
                <div>
                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Duration</label>
                    <input name="duration" type="time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                </div>
                <div>

                    <div>@json($test)</div>

                </div>
            </div>

            <div>
                <label  class="w-full mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input type="text"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" >
            </div>
            <div
            >

            </div>

    <div class="text-black">

                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tag</label>
                    <input  type="text" wire:keydown.enter="addInput" wire:model="newInput" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                    <button wire:click="addInput"></button>
                            <ul class="flex ">
                                @foreach ($inputs as $index => $input)
                                <li class="flex  items-center border rounded p-2 my-2">
                                    {{ $input }}
                                    <button class="mr-2" wire:click="removeInput({{ $index }})">
                                        x
                                    </button>
                                </li>
                                @endforeach
                            </ul>

                    </div>

        </div>
    </form>
    </div>

