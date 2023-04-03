@extends('admin.layout.main')

@section('content')

  <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            
<div class="app-chat overflow-hidden card">
  <div class="row g-0">
    <!-- Chat -->
    <div class="col app-chat-contacts app-sidebar flex-grow-0 overflow-hidden border-end" id="app-chat-contacts">
      <div class="sidebar-header pt-3 px-3 mx-1">
        <div class="d-flex align-items-center me-3 me-lg-0">
          <div class="flex-grow-1 input-group input-group-merge rounded-pill ms-1">
            <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search fs-4"></i></span>
            <input type="text" class="form-control chat-search-input" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31">
          </div>
        </div>
        <i class="bx bx-x cursor-pointer position-absolute top-0 end-0 mt-2 me-1 fs-4 d-lg-none d-block" data-overlay data-bs-toggle="sidebar" data-target="#app-chat-contacts"></i>
      </div>
      <hr class="container-m-nx mt-3 mb-0">
      <div class="sidebar-body">

        <!-- Chats -->
        <ul class="list-unstyled chat-contact-list pt-1" id="chat-list">
          @foreach ($discussions as $discussions )
          @php
            $trainee=DB::table('customers')->where('userid', $discussions->trainee)->first();
      
          @endphp
          <li class="chat-contact-list-item ">
            <a class="d-flex align-items-center" href="{{ route('select_chat',$discussions->id) }}">
              <div class="flex-shrink-0 avatar avatar-offline">
                <img src="{{URL::to('/uploads/customers/'.$trainee->image)}}" alt="Avatar" class="rounded-circle">
              </div>
              <div class="chat-contact-info flex-grow-1 ms-3">
                <h6 class="chat-contact-name text-truncate m-0">{{ $trainee->name }}</h6>
                <p class="chat-contact-status text-truncate mb-0 text-muted">{{ $trainee->email }} </p>
              </div>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    <!-- /Chat -->

    <!-- Chat History -->
    <div class="col app-chat-history">
      <div class="chat-history-wrapper">
        <div class="chat-history-header border-bottom">
          @if (!empty($chat))
    @php
        $user = DB::table('customers')->where('userid',$selected_chat->trainee)->first();
    @endphp
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex overflow-hidden align-items-center">
              <i class="bx bx-menu bx-sm cursor-pointer d-lg-none d-block me-2" data-bs-toggle="sidebar" data-overlay data-target="#app-chat-contacts"></i>
              <div class="flex-shrink-0 avatar">
                <img src="{{ URL::to('uploads/customers/'.$user->image) }}" alt="Avatar" class="rounded-circle" data-bs-toggle="sidebar" data-overlay data-target="#app-chat-sidebar-right">
              </div>
              <div class="chat-contact-info flex-grow-1 ms-3">
                <h6 class="m-0">{{ $user->name }}</h6>
                <small class="user-status text-muted">{{ $user->phone }}</small>
              </div>
            </div>
            <div class="d-flex align-items-center">
            </div>
        </div>
        </div>
        
  
        <div class="chat-history-body">
          <ul class="list-unstyled chat-history mb-0">
          @foreach ($chat as $chat)
        @if ($chat->sender_id==Auth::user()->id)
            <li class="chat-message chat-message-right">
              <div class="d-flex overflow-hidden">
                <div class="chat-message-wrapper flex-grow-1">
                  <div class="chat-message-text">
                    <p class="mb-0">{{ $chat->message }}</p>
                  </div>
                  <div class="text-end text-muted mt-1">
                    <i class='bx bx-check-double text-success'></i>
                    <small>{{ $chat->created_at }}</small>
                  </div>
                </div>
                <div class="user-avatar flex-shrink-0 ms-3">
                  <div class="avatar avatar-sm">
                    <i class="fa fa-user-circle fa-xl" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </li>
            @else
            <li class="chat-message">
              <div class="d-flex overflow-hidden">
                <div class="user-avatar flex-shrink-0 me-3">
                  <div class="avatar avatar-sm">
                    <img src="{{ URL::to('uploads/customers/'.$user->image) }}" alt="Avatar" class="rounded-circle">
                  </div>
                </div>
                <div class="chat-message-wrapper flex-grow-1">
                  <div class="chat-message-text">
                    <p class="mb-0">{{ $chat->message }}</p>
                  </div>
                  <div class="text-muted mt-1">
                    <small>{{ $chat->created_at }}</small>
                  </div>
                </div>
              </div>
            </li>
            @endif
            @endforeach
          </ul>
        </div>
        <!-- Chat message form -->
        
        <div class="chat-history-footer">
          <form class=" d-flex justify-content-between align-items-center" action="{{ route('admin.storemessage') }}" method="POST">
            @csrf
        <input type="hidden" value="{{ $selected_chat->id }}" name="selected_chat">
            <input class="form-control message-input border-0 me-3 shadow-none" placeholder="Type your message here..." name="chat">
            <div class="message-actions d-flex align-items-center">
              <button class="btn btn-primary d-flex send-msg-btn" type="submit">
                <i class="bx bx-paper-plane me-md-1 me-0"></i>
                <span class="align-middle d-md-inline-block d-none">Send</span>
              </button>
            </div>
          </form>
        </div>
        @else
        No Chat Found
        @endif
      </div>
    </div>
    <!-- /Chat History -->

    <div class="app-overlay"></div>
  </div>
</div>



            
          </div>
          <!-- / Content -->


          
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper --> 
@endsection