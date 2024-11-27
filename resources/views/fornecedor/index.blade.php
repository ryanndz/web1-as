@foreach($fornecedor as $entity)
   <div>
       <h3>{{ $entity->name }}</h3>
       <p>{{$entity->contact}}</p>

       <a href="{{ url('fornecedores/'.$entity->id.'/edit') }}">Edit</a>
       <form action="{{ url('fornecedores/'.$entity->id) }}" method="POST">
           @csrf
           @method('DELETE')
           <button type="submit">Delete</button>
       </form>
   </div>
@endforeach