@csrf

<label for="title" class="uppercase text-gray-700 text-xs">Título</label>
<input type="text" name="title" id="title" class="rouded border-gray-200 w-full mb-4" value="{{ $post->title }}">
<label for="body" class="uppercase text-gray-700 text-xs">Contenido</label>
<textarea name="body" id="body" rows="10" class="rouded border-gray-200 w-full mb-4">
    {{ $post->body }}
</textarea>

<div class="flex items-center justify-between">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>
    <button type="submit" class="bg-gray-800 text-white rounded px-4 py-2">Enviar</button>
</div>
