@extends('layout.master')

@section('title', 'Tarif')

@section('content')
<!--Start Promotions Area -->
<section class="promotions_area section_padding" style="padding-top:10px;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                <div class="page_title text-center">
                     <h2>CEK TARIF PENGANTARAN KAMI</h2>
                     @if($errors->has('priceError'))
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            {{ $errors->first('priceError') }}
                        </div>
                    @endif
                    <div class="">
                        <form action="{{ url('price') }}" method="POST">
                        {{ csrf_field() }}
                        <?php
                            $cityStartId  = '';
                            if (!empty(old('startCity'))) {
                                $cityStartId = old('startCity');
                            } elseif (!empty($filters['startCity'])) {
                                $cityStartId = $filters['startCity'];
                            }
                        ?>
                        <div class="form-group">
                          <select class="form-control js-example-basic-single" id="startCity" name="startCity" required>
                            <option value="">Kota Asal</option>
                            @foreach($startCity as $data)
                            <option value="{{ $data['city_id'] }}" {{ $cityStartId == $data['city_id'] ? 'selected' : '' }}>{{ $data['city_name'].' ['.$data['city_code'].'] - '.$data['province'] }}</option>
                            @endforeach
                          </select>
                        </div>
                        <?php
                            $cityStartId  = '';
                            if (!empty(old('destinationCity'))) {
                                $cityStartId = old('destinationCity');
                            } elseif (!empty($filters['destinationCity'])) {
                                $cityStartId = $filters['destinationCity'];
                            }
                        ?>
                        <div class="form-group">
                          <select class="form-control js-example-basic-single" id="destinationCity" name="destinationCity" required>
                            <option value="">Kota Tujuan</option>
                            @foreach($destinationCity as $data)
                            <option value="{{ $data['city_id'] }}" {{ $cityStartId == $data['city_id'] ? 'selected' : '' }}>{{ $data['city_name'].' ['.$data['city_code'].'] - '.$data['province'] }}</option>
                            @endforeach
                          </select>
                        </div>
                        <?php
                        $weight  = '';
                        if (!empty(old('weight'))) {
                            $weight = old('weight');
                        } elseif (!empty($filters['weight'])) {
                            $weight = $filters['weight'];
                        }
                        ?>
                        <div class="form-group">
                            <input class="form-control" type="number" name="weight" placeholder="Weight (Kg)" required value="{{ $weight }}">
                        </div>
                        <?php
                        $long  = '';
                        if (!empty(old('long'))) {
                            $long = str_replace(',', '',old('long'));
                        } elseif (!empty($filters['long'])) {
                            $long = str_replace(',', '', $filters['long']);
                        }
                        ?>
                        <div class="form-group">
                            <input class="form-control" type="number" name="long" placeholder="Long (Cm)" value="{{ $long }}">
                        </div>
                        <?php
                        $width  = '';
                        if (!empty(old('width'))) {
                            $width = str_replace(',', '',old('width'));
                        } elseif (!empty($filters['width'])) {
                            $width = str_replace(',', '', $filters['width']);
                        }
                        ?>
                        <div class="form-group">
                            <input class="form-control" type="number" name="width" placeholder="Width (Cm)" value="{{ $width }}">
                        </div>
                        <?php
                        $height  = '';
                        if (!empty(old('height'))) {
                            $height = str_replace(',', '',old('height'));
                        } elseif (!empty($filters['height'])) {
                            $height = str_replace(',', '', $filters['height']);
                        }
                        ?>
                        <div class="form-group">
                            <input class="form-control" type="number" name="height" placeholder="Height (Cm)" value="{{ $height }}">
                        </div>
                        <p class="text-left signup_form"><button type="submit">Check Price</button></p>
                        </form>
                    </div>
                        <hr>
                        <hr>
                    <div class="signup_form">
                        @if (!empty($price))
                        <h3>Calculate Price Result</h3>
                            <div class="text-center"><span class="price"><h2>Rp {{ number_format($price['price_result']) }}</h2></span></div>
                        <hr>
                        <h3>Description</h3>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" style="text-align:left;">Rute</label>
                            <label class="col-sm-9 control-label" style="text-align:left;">: {{ $price['description']['route_desc'] }} [{{ $price['description']['route_code'] }}]</label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" style="text-align:left;">Price per KG</label>
                            <label class="col-sm-9 control-label" style="text-align:left;">: Rp. {{ number_format($price['description']['rate_kg']) }}</label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" style="text-align:left;">Price Per M3</label>
                            <label class="col-sm-9 control-label" style="text-align:left;">: Rp. {{ number_format($price['description']['rate_m3']) }}</label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" style="text-align:left;">Minimum Weight</label>
                            <label class="col-sm-9 control-label" style="text-align:left;">: {{ $price['description']['minimum_weight'] }} Kg</label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" style="text-align:left;">Minimum Rate</label>
                            <label class="col-sm-9 control-label" style="text-align:left;">: Rp. {{ number_format($price['description']['minimum_rates']) }}</label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" style="text-align:left;">Delivery Estimation </label>
                            <label class="col-sm-9 control-label" style="text-align:left;">: {{ $price['description']['delivery_estimation'] }}</label>
                        </div>
                        @endif
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
<br><br>
@endsection

@section('script')
@parent
<script type="text/javascript">
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
@endsection