@extends('layout.master')

@section('title', 'Tracking')

@section('content')
<!--Start Promotions Area -->
<section class="promotions_area section_padding" style="padding-top:10px;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                <div class="page_title text-center">
                     <h2>Temukan Paket Anda</h2>
                     @if($errors->has('trackingError'))
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            {{ $errors->first('trackingError') }}
                        </div>
                    @endif
                    <div class="">
                        <form action="{{ url('tracking') }}" method="POST">
                        {{ csrf_field() }}
                        <?php
                        $resiNumber  = '';
                        if (!empty(old('resiNumber'))) {
                            $resiNumber = old('resiNumber');
                        } elseif (!empty($filters['resiNumber'])) {
                            $resiNumber = $filters['resiNumber'];
                        }
                        ?>
                        <div class="form-group">
                            <input class="form-control" type="text" name="resiNumber" placeholder="Resi Number" required value="{{ $resiNumber }}">
                        </div>
                        <p class="text-left signup_form"><button type="submit">Tracking</button></p>
                        </form>
                    </div>
                    <div class="signup_form">
                        @if (!empty($resi))
                        <hr>
                        <h4>Resi Information</h4>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" style="text-align:left;">Resi Number</label>
                            <label class="col-sm-9 control-label" style="text-align:left;">: {{ $resi['resi_number'] }} [{{ $resi['route']['route_code'] }}]</label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" style="text-align:left;">Sender Name</label>
                            <label class="col-sm-9 control-label" style="text-align:left;">: {{ $resi['sender_name'] }}</label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" style="text-align:left;">Receiver Name</label>
                            <label class="col-sm-9 control-label" style="text-align:left;">: {{ $resi['receiver_name'] }}</label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" style="text-align:left;">Item Name</label>
                            <label class="col-sm-9 control-label" style="text-align:left;">: {{ $resi['item_name'] }}</label>
                        </div>
                        @endif
                        <hr>
                        <h4>Goods Position</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="50px">Number</th>    
                                        <th>Date</th>
                                        <th>Position</th>
                                        <th>Coly</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;?>
                                    @foreach($data as $item)
                                    <tr>
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td>{{ $item['date'] }}</td>
                                        <td>{{ $item['position'] }}</td>
                                        <td class="text-right">{{ number_format($item['coly']) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <h4>History Transaction</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="50px">Number</th>    
                                        <th>Date</th>
                                        <th>Transaction</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach($history as $item)
                                    <?php $date = !empty($item['transaction_date']) ? new \DateTime($item['transaction_date']) : null; ?>
                                    <tr>
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td>{{ !empty($date) ? $date->format('d-M-Y H:i') : '' }}</td>
                                        <td>{{ $item['transaction_name'] }}</td>
                                        <td>{{ $item['description'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4 col-lg-4 ">
                <div class="single_promotions text-center">
                    <div class="s_promotion_icon">
                        <img src="{{ asset('asset/img/track_icon.png') }}" alt="">
                    </div>
                    <h2>we make it faster</h2>
                    <p>Tim kami dilapangan bekerja 24 jam mengantar paket anda dengan cepat dan akuran  </p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 ">
                <div class="single_promotions text-center">
                    <div class="s_promotion_icon">
                        <img src="{{ asset('asset/img/hand_icon.png') }}" alt="">
                    </div>
                    <h2>save and secure move</h2>
                    <p>Kami sangat memerhatikan keamanan paket anda dengan armada yang sesuai standart ekspedisi  </p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 ">
                <div class="single_promotions text-center">
                    <div class="s_promotion_icon">
                        <img src="{{ asset('asset/img/payment_icon.png') }}" alt="">
                    </div>
                    <h2>easy payment</h2>
                    <p>Jadi langganan kami anda bisa bayar paket anda setelah barang anda didepan rumah anda  </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Promotions Area-->
<br><br><br>
@endsection