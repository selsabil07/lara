
@extends('modules.layout')
@section('content')

<form class="search">
  <input type="text">
  <button type="submit">ajouter un module</button>
</form>

<table>
    <tr class="top">
      <th></th>
      <th>code_ module</th>
      <th>libelle</th>
      <th>volume_horaire</th>
      <th></th>
      <th></th>
    </tr>
    <tbody>
      @foreach ($modules as $item)
      
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->code_module }}</td>
              <td>{{ $item->libelle }}</td>
              <td>{{ $item->volume_horaire }}</td>

              <td>
       
                  <a href="{{ url('/module/' . $item->id . '/edit') }}"
                      title="Modifier Module">
                      Modifier
                  </a>
                  
                  
              </td>

              <td>
                <form method="POST" 
                      action="{{ url('/module' . '/destroy' . $item->id) }}"
                      style="display:inline">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}

                      <div class = "sup" title="Delete" onclick="return confirm('Confirm delete?')">
                        <i aria-hidden="true"></i>Supprimer</div>

                  </form>
              </td>
          </tr>
        
        @endforeach
 </table>

        <button class="delete">Supprimer  tous</button>
        <button class="show">Afficher  tous</button>

 
@endsection


