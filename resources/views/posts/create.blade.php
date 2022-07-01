<x-layout>

    <section class="px-6 py-8">
        <x-panel class="max-w-sm mx-auto">
            <form method="POST" action="/admin/posts">
                @csrf

                <div class="mb-6">
                    <label
                        for="title"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">Title</label>

                    <input
                        type="text"
                        name="title"
                        id="title"
                        value="{{old('title')}}"
                        class="border border-gray-400 p-2 w-full"
                        required
                    >

                    @error('title')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label
                        for="slug"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Slug
                    </label>

                    <input
                        type="text"
                        name="slug"
                        id="slug"
                        value="{{old('slug')}}"
                        class="border border-gray-400 p-2 w-full"
                        required
                    >

                    @error('slug')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label
                        for="excerpt"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">Excerpt</label>

                    <textarea
                        class="border border-gray-400 p-2 w-full"
                        name="excerpt"
                        id="excerpt"
                        required
                    >{{old('excerpt')}}</textarea>

                    @error('excerpt')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label
                        for="body"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">Body</label>

                    <textarea
                        class="border border-gray-400 p-2 w-full"
                        name="body"
                        id="body"
                        required
                    >{{old('body')}}</textarea>

                    @error('body')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label
                        for="category_id"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">Category</label>

                    <select name="category_id" id="category">
                        @foreach(\App\Models\Category::all() as $category)
                            <option
                                value="{{$category->id}}"
                                {{old('category_id') == $category->id ? 'selected' : ''}}>
                                {{ucwords($category->name)}}</option>
                        @endforeach
                        <option value="personal">Personal</option>
                    </select>


                    @error('category')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror
                </div>

                <x-submit-button>Publish</x-submit-button>
            </form>
        </x-panel>

    </section>

</x-layout>
