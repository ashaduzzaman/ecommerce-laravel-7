@extends('layouts.front')

@push('mycss')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
@endpush

@section('content')
<section id="user-profile" class="user-profile section">
    <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="profile-left-sidebar">
                        <div class="profile-display">
                            <div class="display-column">
                                <img src="/images/user.png" alt="user_avatar">
                                <h4 class="">{{ $userDetails->name }}</h4>
                                <ul>
                                    <li>(+880) 9610-223344</li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="sidebar-tabs">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-personal-info-tab" data-toggle="pill" href="#v-pills-personal-info" role="tab" aria-controls="v-pills-personal-info" aria-selected="true">
                                    <svg version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 482.9 482.9" style="enable-background:new 0 0 482.9 482.9;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M239.7,260.2c0.5,0,1,0,1.6,0c0.2,0,0.4,0,0.6,0c0.3,0,0.7,0,1,0c29.3-0.5,53-10.8,70.5-30.5
                                                    c38.5-43.4,32.1-117.8,31.4-124.9c-2.5-53.3-27.7-78.8-48.5-90.7C280.8,5.2,262.7,0.4,242.5,0h-0.7c-0.1,0-0.3,0-0.4,0h-0.6
                                                    c-11.1,0-32.9,1.8-53.8,13.7c-21,11.9-46.6,37.4-49.1,91.1c-0.7,7.1-7.1,81.5,31.4,124.9C186.7,249.4,210.4,259.7,239.7,260.2z
                                                    M164.6,107.3c0-0.3,0.1-0.6,0.1-0.8c3.3-71.7,54.2-79.4,76-79.4h0.4c0.2,0,0.5,0,0.8,0c27,0.6,72.9,11.6,76,79.4
                                                    c0,0.3,0,0.6,0.1,0.8c0.1,0.7,7.1,68.7-24.7,104.5c-12.6,14.2-29.4,21.2-51.5,21.4c-0.2,0-0.3,0-0.5,0l0,0c-0.2,0-0.3,0-0.5,0
                                                    c-22-0.2-38.9-7.2-51.4-21.4C157.7,176.2,164.5,107.9,164.6,107.3z"/>
                                                <path d="M446.8,383.6c0-0.1,0-0.2,0-0.3c0-0.8-0.1-1.6-0.1-2.5c-0.6-19.8-1.9-66.1-45.3-80.9c-0.3-0.1-0.7-0.2-1-0.3
                                                    c-45.1-11.5-82.6-37.5-83-37.8c-6.1-4.3-14.5-2.8-18.8,3.3c-4.3,6.1-2.8,14.5,3.3,18.8c1.7,1.2,41.5,28.9,91.3,41.7
                                                    c23.3,8.3,25.9,33.2,26.6,56c0,0.9,0,1.7,0.1,2.5c0.1,9-0.5,22.9-2.1,30.9c-16.2,9.2-79.7,41-176.3,41
                                                    c-96.2,0-160.1-31.9-176.4-41.1c-1.6-8-2.3-21.9-2.1-30.9c0-0.8,0.1-1.6,0.1-2.5c0.7-22.8,3.3-47.7,26.6-56
                                                    c49.8-12.8,89.6-40.6,91.3-41.7c6.1-4.3,7.6-12.7,3.3-18.8c-4.3-6.1-12.7-7.6-18.8-3.3c-0.4,0.3-37.7,26.3-83,37.8
                                                    c-0.4,0.1-0.7,0.2-1,0.3c-43.4,14.9-44.7,61.2-45.3,80.9c0,0.9,0,1.7-0.1,2.5c0,0.1,0,0.2,0,0.3c-0.1,5.2-0.2,31.9,5.1,45.3
                                                    c1,2.6,2.8,4.8,5.2,6.3c3,2,74.9,47.8,195.2,47.8s192.2-45.9,195.2-47.8c2.3-1.5,4.2-3.7,5.2-6.3
                                                    C447,415.5,446.9,388.8,446.8,383.6z"/>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="ml-3 tab-link-content">Personal Information</span>
                                </a>
                                <a class="nav-link" id=v-pills-change-password-tab" data-toggle="pill" href="#v-pills-change-password" role="tab" aria-controls="v-pills-change-password" aria-selected="false">
                                    <svg height="484pt" viewBox="-15 -15 484.00019 484" width="484pt"><path d="m401.648438 18.234375c-24.394532-24.351563-63.898438-24.351563-88.292969 0l-22.101563 22.222656-235.269531 235.144531-.5.503907c-.121094.121093-.121094.25-.25.25-.25.375-.625.746093-.871094 1.121093 0 .125-.128906.125-.128906.25-.25.375-.371094.625-.625 1-.121094.125-.121094.246094-.246094.375-.125.375-.25.625-.378906 1 0 .121094-.121094.121094-.121094.25l-52.199219 156.96875c-1.53125 4.46875-.367187 9.417969 2.996094 12.734376 2.363282 2.332031 5.550782 3.636718 8.867188 3.625 1.355468-.023438 2.699218-.234376 3.996094-.625l156.847656-52.324219c.121094 0 .121094 0 .25-.121094.394531-.117187.773437-.285156 1.121094-.503906.097656-.011719.183593-.054688.253906-.121094.371094-.25.871094-.503906 1.246094-.753906.371093-.246094.75-.621094 1.125-.871094.125-.128906.246093-.128906.246093-.25.128907-.125.378907-.246094.503907-.5l257.371093-257.371094c24.351563-24.394531 24.351563-63.898437 0-88.289062zm-232.273438 353.148437-86.914062-86.910156 217.535156-217.535156 86.914062 86.910156zm-99.15625-63.808593 75.929688 75.925781-114.015626 37.960938zm347.664062-184.820313-13.238281 13.363282-86.917969-86.917969 13.367188-13.359375c14.621094-14.609375 38.320312-14.609375 52.945312 0l33.964844 33.964844c14.511719 14.6875 14.457032 38.332031-.121094 52.949218zm0 0"/></svg>
                                    <span class="ml-3 tab-link-content">Change Password</span>
                                </a>
                                <a class="nav-link" id="v-pills-address-tab" data-toggle="pill" href="#v-pills-address" role="tab" aria-controls="v-pills-address" aria-selected="false">
                                    <svg version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M256,0C148.477,0,61,87.477,61,195c0,69.412,21.115,97.248,122.581,231.01C201.194,449.229,221.158,475.546,244,506
                                                c2.833,3.777,7.279,6,12.001,6c4.722,0,9.167-2.224,12-6.002c22.708-30.29,42.585-56.507,60.123-79.638
                                                C429.834,292.209,451,264.292,451,195C451,87.477,363.523,0,256,0z M304.219,408.235c-14.404,18.998-30.383,40.074-48.222,63.789
                                                c-17.961-23.867-34.031-45.052-48.515-64.146C108.784,277.766,91,254.321,91,195c0-90.981,74.019-165,165-165s165,74.019,165,165
                                                C421,254.205,403.17,277.722,304.219,408.235z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M256,90c-57.897,0-105,47.103-105,105c0,57.897,47.103,105,105,105c57.897,0,105-47.103,105-105
                                                C361,137.103,313.897,90,256,90z M256,270c-41.355,0-75-33.645-75-75s33.645-75,75-75c41.355,0,75,33.645,75,75
                                                S297.355,270,256,270z"/>
                                        </g>
                                    </g>
                                    </svg>
                                    <span class="ml-3 tab-link-content">Address</span>
                                </a>
                                <a class="nav-link" id="v-pills-order-history-tab" data-toggle="pill" href="#v-pills-order-history" role="tab" aria-controls="v-pills-order-history" aria-selected="false">
                                    <svg version="1.1" id="Capa_1" x="0px" y="0px"
                                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M491.729,112.971L259.261,0.745c-2.061-0.994-4.461-0.994-6.521,0L20.271,112.971c-2.592,1.251-4.239,3.876-4.239,6.754
                                                v272.549c0,2.878,1.647,5.503,4.239,6.754l232.468,112.226c1.03,0.497,2.146,0.746,3.261,0.746s2.23-0.249,3.261-0.746
                                                l232.468-112.226c2.592-1.251,4.239-3.876,4.239-6.754V119.726C495.968,116.846,494.32,114.223,491.729,112.971z M256,15.828
                                                l215.217,103.897l-62.387,30.118c-0.395-0.301-0.812-0.579-1.27-0.8L193.805,45.853L256,15.828z M176.867,54.333l214.904,103.746
                                                l-44.015,21.249L132.941,75.624L176.867,54.333z M396.799,172.307v78.546l-41.113,19.848v-78.546L396.799,172.307z
                                                M480.968,387.568L263.5,492.55V236.658l51.873-25.042c3.73-1.801,5.294-6.284,3.493-10.015
                                                c-1.801-3.729-6.284-5.295-10.015-3.493L256,223.623l-20.796-10.04c-3.731-1.803-8.214-0.237-10.015,3.493
                                                c-1.801,3.73-0.237,8.214,3.493,10.015l19.818,9.567V492.55L31.032,387.566V131.674l165.6,79.945
                                                c1.051,0.508,2.162,0.748,3.255,0.748c2.788,0,5.466-1.562,6.759-4.241c1.801-3.73,0.237-8.214-3.493-10.015l-162.37-78.386
                                                l74.505-35.968L340.582,192.52c0.033,0.046,0.07,0.087,0.104,0.132v89.999c0,2.581,1.327,4.98,3.513,6.353
                                                c1.214,0.762,2.599,1.147,3.988,1.147c1.112,0,2.227-0.247,3.26-0.746l56.113-27.089c2.592-1.251,4.239-3.875,4.239-6.754v-90.495
                                                l69.169-33.392V387.568z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M92.926,358.479L58.811,342.01c-3.732-1.803-8.214-0.237-10.015,3.493c-1.801,3.73-0.237,8.214,3.493,10.015
                                                l34.115,16.469c1.051,0.508,2.162,0.748,3.255,0.748c2.788,0,5.466-1.562,6.759-4.241
                                                C98.22,364.763,96.656,360.281,92.926,358.479z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M124.323,338.042l-65.465-31.604c-3.731-1.801-8.214-0.237-10.015,3.494c-1.8,3.73-0.236,8.214,3.494,10.015
                                                l65.465,31.604c1.051,0.507,2.162,0.748,3.255,0.748c2.788,0,5.466-1.562,6.759-4.241
                                                C129.617,344.326,128.053,339.842,124.323,338.042z"/>
                                        </g>
                                    </g>
                                    </svg>
                                    <span class="ml-3 tab-link-content">Order History</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="form-main">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-personal-info" role="tabpanel" aria-labelledby="v-pills-personal-info-tab">
                                <div class="account-block">
                                    <h4>Personal Information</h4>
                                    <hr>
                                    @if ($message = Session::get('success'))
                                        <div class="callout callout-success" style="color: #479367;">
                                            <h4><i class="fa fa-check"></i> Success!</h4>
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif
                                    @if ($message = Session::get('error'))
                                        <div class="callout callout-success" style="color: #a33a1a;">
                                            <h4><i class="fa fa-check"></i> Error!</h4>
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif
                                    <form class="form" method="post" action="{{ route('account.update') }}">
                                        @csrf
                                        <div class="column">
                                            <div class="col-lg-8 col-12">
                                                <div class="form-group">
                                                    <label>Your Name<span>*</span></label>
                                                    <input name="name" type="text" placeholder="Name" value="{{ $userDetails->name }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-12">
                                                <div class="form-group">
                                                    <label>Your Email<span>*</span></label>
                                                    <input name="email" type="email" placeholder="" value="{{ $userDetails->email }}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-12">
                                                <div class="form-group">
                                                    <label>Your Phone<span>*</span></label>
                                                    <input name="phone_number" type="text" placeholder="" value="">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group button">
                                                    <button type="submit" class="btn ">Save Changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-change-password" role="tabpanel" aria-labelledby="v-pills-change-password-tab">
                                <div class="account-block">
                                    <h4>Change Password</h4>
                                    <hr>
                                    @if ($message = Session::get('success'))
                                        <div class="callout callout-success" style="color: #479367;">
                                            <h4><i class="fa fa-check"></i> Success!</h4>
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif
                                    @if ($message = Session::get('error'))
                                        <div class="callout callout-error" style="color: #a33a1a;">
                                            <h4><i class="fa fa-bomb"></i> Error!</h4>
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif
                                    <form class="form" method="post" action="{{ route('account.changePassword') }}">
                                        @csrf
                                        <div class="column">
                                            <div class="col-lg-8 col-12">
                                                <div class="form-group">
                                                    <label for="current-password">Current Password<span>*</span></label>
                                                    <input id="current-password" name="current_password" type="password" class="@error('password') is-invalid @enderror" required autocomplete="current-password">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-12">
                                                {{-- <div class="form-group">
                                                    <label for="password">New Password<span>*</span></label>
                                                    <input id="password" name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required autocomplete="new-password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div> --}}
                                                <div class="form-group">
                                                    <label for="password">{{ __('Password') }}</label>
                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="new-password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-12">
                                                {{-- <div class="form-group">
                                                    <label for="password-confirm">Confirm New Password<span>*</span></label>
                                                    <input id="password-confirm" name="password_confirmation" type="password" required autocomplete="new-password">
                                                </div> --}}
                                                <div class="form-group">
                                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group button">
                                                    <button type="submit" class="btn ">
                                                        {{ __('Save Changes') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-address" role="tabpanel" aria-labelledby="v-pills-address-tab">...</div>
                            <div class="tab-pane fade" id="v-pills-order-history" role="tabpanel" aria-labelledby="v-pills-order-history-tab">
                                <div class="order-history-block">
                                    <h4>Order List</h4>
                                    <hr>
                                    <table id="example" class="table table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Order Date</th>
                                                <th>Amount</th>
                                                <th>Payment</th>
                                                <th>Status</th>
                                                {{-- <th>Action</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php $sl = 0 @endphp
                                        @foreach($orders as $order)
                                            <tr>
                                                <td>{{ $order->order_number }}</td>
                                                <td>{{ $order->created_at }}</td>
                                                <td>৳{{ $order->grand_total }}</td>
                                                @if ($order->is_paid)
                                                <td>Paid</td>
                                                @else
                                                <td>Unpaid</td>
                                                @endif
                                                <td>{{ $order->status }}</td>
                                                {{-- <td>
                                                    <form action="" method="get" style ='float: left; padding: 5px;'>
                                                        @csrf
                                                        <button type="submit" class="show-btn-order"><i class="fa fa-eye"></i></button>
                                                    </form>
                                                </td> --}}
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                          </div>

                    </div>
                </div>
            </div>
        </div>
</section>
{{-- <div class="account-block">
    <h2>Personal Data</h2>
    <p>{{ $userDetails->name }}</p>
</div> --}}
@endsection

@section('scripts')
<script>
    $(document).ready(function(){

        $(".nav-pills a").click(function(){
            $(this).tab('show');
        });

        $('.nav-pills a').on('show.bs.tab', function(e) {
            localStorage.setItem('activeTab', $(e.target).attr('href'));
        });
        var activeTab = localStorage.getItem('activeTab');
        if(activeTab){
            $('#v-pills-tab a[href="' + activeTab + '"]').tab('show');
        }
    });
    </script>
@endsection
