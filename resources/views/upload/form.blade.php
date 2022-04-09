<form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
 @csrf

 <input type="file" name="arquivo" multiple>

 <button type="submit">Enviar Arquivo</button>
</form>
