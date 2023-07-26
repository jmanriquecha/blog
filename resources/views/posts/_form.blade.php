@csrf

<label for="title" class="uppercase text-gray-700 text-xs">Título</label>
<span class="text-xs text-red-600">
    @error('title')
        {{ $message }}
    @enderror
</span>
<input type="text" name="title" id="title" class="rouded border-gray-200 w-full mb-4"
    value="{{ old('title', $post->title) }}">

<label for="slug" class="uppercase text-gray-700 text-xs">Url:
    <span class="lowercase">
        blog/mi-url-personalizada
    </span>
</label>
<span class="text-xs text-red-600">
    @error('slug')
        {{ $message }}
    @enderror
</span>
<input type="text" name="slug" id="slug" class="rouded border-gray-200 w-full mb-4"
    value="{{ old('slug', $post->slug) }}">

<label for="body" class="uppercase text-gray-700 text-xs">Contenido</label>
<span class="text-xs text-red-600">
    @error('body')
        {{ $message }}
    @enderror
</span>
<textarea name="body" id="body" rows="10" class="rouded border-gray-200 w-full mb-4">
    {{ old('body', $post->body) }}
</textarea>

<div class="flex items-center justify-between">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>
    <button type="submit" class="bg-gray-800 text-white rounded px-4 py-2">Enviar</button>
</div>
