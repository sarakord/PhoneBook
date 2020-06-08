  <!-- The Modal -->
  <div class="modal fade" id="detail-{{$contact->id}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">{{$contact->name}}</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-6">
               <p> شماره تماس : {{$contact->phone}}</p>
               <p>شماره موبایل : {{$contact->mobile}}</p>
               <p>شماره فکس : {{$contact->fax}}</p>
               <p>آدرس : {{$contact->address}}</p>
               <p>توضیحات : {{$contact->description}}</p>
            </div>
            <div class="col-6">
              <img src="{{asset('images/contacts/' . $contact->image)}}" style="max-width:250px;max-height: 300px;">
            </div>
          </div>
          
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">بستن صفحه</button>
          <a href="{{route('contact.edit' , $contact->id)}}" class="btn btn-success">ویرایش اطلاعات</a>
        </div>
        
      </div>
    </div>
  </div>