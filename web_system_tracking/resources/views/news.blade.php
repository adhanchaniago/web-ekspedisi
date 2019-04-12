@extends('layout.master')

@section('title', 'Berita')

@section('content')
<section class="blog_area section_padding ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="page_title text-center">
                    <h2>Berita Tentang Kami</h2>
                </div>
            </div>
        </div>
            @foreach($models as $model)
        <div class="row">
            <?php $date = new \DateTime($model->published_at); ?>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="single_blog">
                    <div class="blog_img">
                       <a href="{{ url('single-news').'/'.$model->title }}"> <img src="{{ asset('asset/img/blog/'.$model->photo) }}" alt=""></a>
                        <div class="blog_date">
                            <p class="Blog_month">{{ $date->format('d') }}<span>{{ $date->format('M') }}</span></p>
                            <p class="blog_year">{{ $date->format('y') }}</p>
                        </div>
                    </div>
                    <div class="blog_content blog_page">   
                        <p class="blog_name">{{ $model->keyword }}</p>
                        <h3><a href="{{ url('single-news').'/'.$model->title }}">{{ $model->title }}</a></h3>
                        <p>{!! substr($model->text_contain, 0, 300) !!}{{ strlen($model->text_contain) > 300 ? '.........' : '' }}</p>
                        <p class="blog_name">{{ !empty($model->source) ? 'Sumber :' .$model->source : '' }}</p>
                    </div>
                </div>
            </div>
        </div>
            @endforeach
        <div class="clearfix"></div>
        <div class="data-table-toolbar">
            {!! $models->render() !!}
        </div>
    </div>
</section>
<!--End Blog Area-->
@endsection