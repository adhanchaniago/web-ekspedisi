<?php 
use App\Modules\Operational\Model\Transaction\TransactionResiLine;
$branchs = \DB::table('branch')->select('branch.*')->get();
 ?>
<!--Start Mainmenu-->
<div class="mainmenu_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-9">
                <div class="mainmenu nav">
					<nav>
						<ul id="nav">
							<li class="{{ url()->current() == url('') ? 'current' : '' }}"><a href="{{ url('/') }}">Beranda</a></li>
                            <li class="{{ url()->current() == url('tracking') ? 'current' : '' }}"><a href="{{ url('tracking') }}">Tracking</a></li>
                            <li class="{{ url()->current() == url('price') ? 'current' : '' }}"><a href="{{ url('price') }}">Tarif</a></li>
                            <li><a class="{{ url('/').'/'.Request::segment(1) == url('/branch') ? 'current' : '' }}" href="#">Cabang</a>
                                <ul>
                                    @foreach($branchs as $branch)
                                    <li class="{{ url()->current() == url('branch').'/'.$branch->branch_code ? 'current' : '' }}"><a href="{{ url('/branch').'/'.$branch->branch_code }}">{{ $branch->branch_name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="{{ url()->current() == url('news') ? 'current' : '' }}"><a href="{{ url('news') }}">Berita</a></li>
                            <li class="{{ url()->current() == url('contact') ? 'current' : '' }}"><a href="{{ url('contact') }}">Kontak</a></li>
                            <li>
								<form action="#" class="search-form">
                                    <div class="form-group has-feedback">
                                        <!-- <label for="search" class="sr-only">Search</label> -->
                                        <!-- <input type="text" class="form-control" name="search" id="search" placeholder="search"> -->
                                        <!-- <span class="glyphicon glyphicon-search form-control-feedback"></span> -->
                                    </div>
                                </form>
                            </li>                            
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="request_code">
                    <a href="{{ url('/tracking') }}"><input type="submit" value="TRACKING"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Mainmenu -->