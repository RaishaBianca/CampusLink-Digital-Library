<x-layout>
<i class="fa-solid fa-arrow-left container ml-16 my-6"><a href="javascript:history.back()" class="ml-4">Back</a></i>
    <div class=" border border-gray-200 rounded p-10 max-w-lg mx-auto mt-8 bg-gray-100">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Edit details</h2>
            <p class="mb-4">Edit the details of the book you submitted</p>
          </header>
      
          <form method="POST" action="/libraries/{{$library->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
              <label for="title" class="inline-block text-lg mb-2">Title</label>
              <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                value="{{$library->title}}" />
      
              @error('title')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
      
            <div class="mb-6">
              <label for="author" class="inline-block text-lg mb-2">Author</label>
              <input type="text" class="border border-gray-200 rounded p-2 w-full" name="author"
                 value="{{$library->author}}" />
      
              @error('author')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
      
            <div class="mb-6">
              <label for="publisher" class="inline-block text-lg mb-2">Publisher</label>
              <input type="text" class="border border-gray-200 rounded p-2 w-full" name="publisher"
                 value="{{$library->publisher}}" />
      
              @error('publisher')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                  Book Summary
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                 >{{$library->description}}</textarea>
        
                @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
              </div>
      
            <div class="mb-6">
                <label for="category" class="inline-block text-lg mb-2">Category</label>
                <select class="border border-gray-200 rounded p-2 w-full" name="category">
                    <option value="conference" {{ $library->category == 'conference' ? 'selected' : '' }}>Conference Proceedings</option>
                    <option value="reference" {{ $library->category == 'reference' ? 'selected' : '' }}>Reference Books</option>
                    <option value="academic" {{ $library->category == 'academic' ? 'selected' : '' }}>Academic Journals</option>
                </select>
            
                @error('cateory')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            
      
            <div class="mb-6">
              <label for="isbn" class="inline-block text-lg mb-2">
                ISBN Number
              </label>
              <input type="text" class="border border-gray-200 rounded p-2 w-full" name="isbn"
                 value="{{$library->isbn}}" />
      
              @error('isbn')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
      
            <div class="mb-6">
              <label for="image" class="inline-block text-lg mb-2">
                Cover
              </label>
              <img src="{{$library->image ? asset('storage/' . $library->image) : asset('storage/images/no-image.png')}}" alt="{{ $library->title }}" class="object-center object-cover h-24 rounded-md">
              <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image" value="{{$library->image}}"/>
              @error('image')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
      
            <div class="mb-6">
              <button type="submit" class="bg-laravel text-white rounded py-2 px-4 bg-black hover:opacity-50">
                Submit
              </button>
      
              <a href="/" class="text-black ml-4"> Back </a>
            </div>
          </form>
    </div>
</x-layout>