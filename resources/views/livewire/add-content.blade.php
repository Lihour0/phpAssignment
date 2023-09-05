<div class="relative text-black  p-5"> <div class="text-xl "> Create Content </div>

    <div x-data="{ contents: [{title: '', description: '', video_title: '', video_description: '', course_id: {{$course_id}}}] }">
        <form class="p-3" method="POST" wire:submit.prevent="store(contents)" enctype="multipart/form-data">
            @csrf
            <div class="">
                <template x-for="(content, index) in contents" :key="index">
                    <div class="grid grid-cols-1 gap-3 mb-3 w-full text-black">

                        <div class="text-lg font-semibold">
                            Content
                            <span x-text="index + 1"></span>
                        </div>
                        <div class="ml-1">

                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                            <input type="text" x-model="content.title"
                                class="w-96 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <div class="h-1">
                                @error('title') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div>
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea type="text" x-model="content.description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=""></textarea>
                        </div>
                        <div class="ml-3">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Video title</label>
                            <input x-model="content.video_title" type="text" class="w-96 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="ml-3">
                            <label for="video_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Video description</label>
                            <textarea type="text" x-model="content.video_description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray400 dark:text-white dark:focus:ring-blue500 dark:focus:border-blue500" placeholder=""></textarea>
                        </div>
                    </div>
                </template>

                <div class="flex">

                    <button type="button" class="" title="Add more content" @click="contents.push({title: '', description: '', video_title: '', video_description: '', course_id: {{$course_id}} })">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12H18M12 6V18" stroke="#5d5555" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </button>
                    <button type="button" @click="contents.splice(0, 1)" :disabled="contents.length < 1">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12L18 12" stroke="#BC544B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>


                    </button>
                </div>

                <div class="flex mt-4 justify-end">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>


