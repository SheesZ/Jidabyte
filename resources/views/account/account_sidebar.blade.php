            <div class="col-lg-3 col-md-4">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="{{ URL('account') }}" class="<?php echo (isset($segment[0]) AND $segment[0] == 'account')  ? 'active' : '' ?>"><i class="fa fa-dashboard"></i>
                                        Dashboard</a>
                                    @if(Auth::user()->role == 'Software Vendor')
                                     <a href="{{ URL('list-products') }}" class="<?php echo (isset($segment[0]) AND $segment[0] == 'orders')  ? 'active' : '' ?>"><i class="fa fa-cart-arrow-down"></i> List Product</a>
                                     <a href="{{ URL('Business-Partner') }}" class="<?php echo (isset($segment[0]) AND $segment[0] == 'Business Partner')  ? 'active' : '' ?>"><i class="fa fa-users"></i> Business Partners</a>
                                     @endif
                                    @if(Auth::user()->role == 'Business Partner')
                                        <a href="{{ URL('view-products') }}" class="<?php echo (isset($segment[0]) AND $segment[0] == 'orders')  ? 'active' : '' ?>"><i class="fa fa-cart-arrow-down"></i> Product</a>
                                    @endif
                                     
                                     
                                    <a href="{{ URL('account-detail') }}" class="<?php echo (isset($segment[1]) AND $segment[1] == 'detail')  ? 'active' : '' ?>"><i class="fa fa-user"></i> Account Details</a>
    
                                    <a href="{{ URL('signout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                                </div>
                            </div>