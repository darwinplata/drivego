Creacion de Stores
<form action="{{ url('delivery/stores') }}" method="post" enctype="multipart/form-data">
 {{ csrf_field() }}
 <input type="hidden" name="str_geolocation"  id="str_geolocation" value='1,0'>

 <label for="str_name">{{'Name'}}</label>
 <input type="text" name="str_name"         id="str_name"><br>

 <label for="cod_county">{{'County'}}</label>
 <input type="text" name="cod_county"       id="cod_county"><br>

 <label for="cod_city">{{'City'}}</label>
 <input type="text" name="cod_city"         id="cod_city"><br>
 
 <label for="str_address">{{'Address'}}</label>
 <input type="text" name="str_address"      id="str_address"><br>
 
 <label for="num_zipcode">{{'ZIP Code'}}</label>
 <input type="text" name="num_zipcode"      id="num_zipcode"><br>

 <label for="str_phone">{{'Phone Number'}}</label>
 <input type="text"   name="str_phone"        id="str_phone"><br>

 <label for="str_contact_name">{{'Contact Name'}}</label>
 <input type="text"   name="str_contact_name" id="str_contact_name"><br>

 <button type="submit">{{'Submit'}}</button>
</form>