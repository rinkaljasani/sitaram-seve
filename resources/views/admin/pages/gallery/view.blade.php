@extends('admin.layouts.app')

@push('breadcrumb')
    {!! Breadcrumbs::render('users_show',$user->id) !!}
@endpush

@push('extra-css-styles')

@endpush

@section('content')
<div class="container">
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
                    <i class="{{$icon}} text-primary"></i>
                </span>
                <h3 class="card-label text-uppercase">{{ $custom_title }} Informations</h3>
            </div>
            <div class="card-toolbar">
            
            </div>
           
        </div>

        <!--begin::Form-->
        <form id="frmAddUser" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-10">
                    <div class="container my-5 border-b ">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="d-flex flex-column bd-highlight mb-3">
                                  {{-- <div class="p-2 bd-highlight">User Detail</div> --}}
                                  <div class="container">
                                      <div class="row">
                                        <div class="col-sm-3">
                                          <div class="px-2 bd-highlight"><img height="120" width="120" class="zoom-content" src="{{ Storage::url($user->profile_photo) }}" alt="image"></div>
                                        </div>
                                        
                                      </div>
                                    </div>
                                  
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">Full Name</div>
                                        <div class="px-2 mb-1 bd-highlight"><b>{{ $user->full_name}}</b></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">Email</div>
                                        <div class="px-2  bd-highlight"><b>{{ $user->email ?: 'N/A'}}</b></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">Mobile Number</div>
                                        <div class="px-2 mb-1 bd-highlight"><b>({{ $user->country_code}}) {{ $user->contact_no }}</b></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">Signup Date</div>
                                        <div class="px-2  bd-highlight"><b>{{ $user->created_at->format('M d Y') ?: 'N/A'}}</b></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 pt-5">
                    <!-- Example single danger button-->
                    {{-- <div class="btn-group justify-content-center d-flex px-5 py-2">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                      <div class="dropdown-menu">
                             <form action="{{ route('admin.users.update',$user->custom_id) }}" method="POST">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" name="action" value="change_status">
                                    @if($user->is_active == 'y')
                                        <input type="hidden" name="value" value="n">
                                        <button class="dropdown-item" type="submit" >In Active</button>    
                                    @else
                                        <input type="hidden" name="value" value="y">
                                        <button class="dropdown-item" type="submit" >Active</button>    
                                    @endif
                            </form>
                      </div>
                    </div> --}}
                    <div class="px-5 py-2"><a href="{{ route('admin.users.edit',$user->custom_id) }}" class="btn btn-primary btn-block">Edit</a></div>
                    <div class="px-5 py-2">
                         <form action="{{ route('admin.users.destroy',$user->custom_id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-block">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2 text-uppercase"> Add {{ $custom_title }}</button>
                {{-- <a href="{{ route('admin.skill.index') }}" class="btn btn-secondary text-uppercase">Cancel</a> --}}
            </div> -->
        </form>
     
        <!--end::Form-->
    </div>
</div>
@endsection

@push('extra-js-scripts')

<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script>

    $(document).ready(function () {
        var value = $('ul.nav-tabs li a.active').data(type);
        var type = value['type'];
        tableData('all');
        
    });

    $('.tab-change').click(function(){
        oTable.destroy();
        var type = $(this).data('type');
            tableData(type);
    });

    
</script>
 
<script type="text/javascript">
    $('.tab-change').click(function(){
        var tab_type = $(this).data('type');
        if(tab_type == 'completed'){
            $('.filter').hide();
        }else{
            $('.filter').show();
        }
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
    $(".zoom-content").hover(function() {
        $(".zoom-content").addClass('transition');
    
    }, function() {
        $(".zoom-content").removeClass('transition');
    });
});
</script>
@endpush
