
<h1>Aggiungi un nuovo documento</h1>

@if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)

              <li>{{ $error }}</li>

          @endforeach
      </ul>
  </div>
@endif

<form class="" action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('post')
  <div class="form-group">
      <label for="title">Titolo Documento</label>
      <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Titolo...">
  </div>
  <div class="md-form">
    <label for=description>Descrizione documento</label>
    <textarea name="description" id="form7" class="md-textarea form-control" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="file">Inserisci il file</label>
    <input name="file" type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<h1 style="margin-top:40px;">Cancella i documenti caricati</h1>
@foreach (\App\Document::all() as $document)
  <div class="">
    {{$document->title}} - {{$document->original_name}}  - <span> <a href="{{route('admin.delete',$document->id)}}">Elimina</a> </span>
  </div>
@endforeach
