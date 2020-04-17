<!--========== الفرص  التصديرية ==========-->
<section class="ftco-section ftco-wrap-about">
        <div class="container">
    
            <div class="col-md-12 ftco-animate">
              <div class="heading-section mb-5 my-5 my-md-0">
            </div>
            <input type="hidden" id="chanceType" value="{{$chanceType}}" >
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr class="bg-brown text-white">
                          <th>عنوان الفرصة </td>
                   
                            <th>الدولة</th>
                            <th>المجال </th>
                            <th>بيانات التواصل</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($chances as $chance)
                        <tr>
                            <td>{{$chance->ar_subject}}</td>
                           
                            <td>{{$chance->chance_country_id}}</td>
                            <td>{!! $chance->ar_field !!}</td>
                            <td>
                            {!! $chance->ar_contact !!}
                            </td>
                        </tr>
                        
                        
                       @endforeach
                          </tbody>
                    </table>
              
                    <div class="pagination">
	<ol id="numbers"></ol>
</div>
              
  
            </div>
          </div>

          <div class="row no-gutters my-5">
        <div class="col text-center"  style="margin-right: 45%">
          <div id="categorySchedule" class="block-27">
          </div>
        </div>
      </div>
        </div>
      </section>



  
