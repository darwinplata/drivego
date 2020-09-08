Lista de Stores
<table class="table table-light">
 <thead class="thead-light">
  <tr>
   <th>{{'Name'}}</th>
   <th>{{'Address'}}</th>
   <th>{{'Phone Number'}}</th>
   <th>{{'Contact Name'}}</th>
   <th></th>
  </tr>
 </thead>
 <tbody>
  @foreach($stores as $store)
  <tr>
   <td>{{ $store->str_name}}</td>
   <td>{{ $store->str_address}}</td>
   <td>{{ $store->str_phone}}</td>
   <td>{{ $store->str_contact_name}}</td>
   <td><a href='{{ url("/delivery/stores/".$store->id."/edit/") }}'>Edit</a> |  
       <form method="post" action="{{ url('/delivery/stores/'.$store->id) }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" onclick="return confirm('Do you like to erase?');">Delete</button>
        
       </form>
   </td>
  </tr>
  @endforeach
 </tbody>
</table>