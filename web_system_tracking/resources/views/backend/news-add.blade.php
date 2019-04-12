@extends('layout.master-backend')

@section('title', $title)

<?php use App\Model\News; ?>

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">{{ $title }}</h3>
            <br>
            <form class="form-horizontal" method="POST" action="{{ url('admin/news/save') }}">
                {{ csrf_field() }}
                <input type="hidden" name="newsId" class="form-control" value="{{ $model->news_id }}" >
                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                    <label class="col-md-12">News Name</label>
                    <div class="col-md-12">
                        <input type="text" name="title" class="form-control" value="{{ count($errors) > 0 ? old('title') : $model->title }}" >
                        @if($errors->has('title'))
                        <span class="help-block">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                    <label class="col-md-12">Status</label>
                    <div class="col-md-12">
                        <input type="text" name="status" class="form-control" value="{{ count($errors) > 0 ? old('status') : $model->status }}" readonly>
                        @if($errors->has('status'))
                        <span class="help-block">{{ $errors->first('status') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('textContain') ? 'has-error' : '' }}">
                    <label class="col-md-12">Contain</label>
                    <div class="col-md-12">
                        <textarea class="form-control my-editor" rows="50" name="textContain">{!! count($errors) > 0 ? old('textContain') : $model->text_contain !!}</textarea>
                        @if($errors->has('textContain'))
                        <span class="help-block">{{ $errors->first('textContain') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 pull-left">
                        <a href="{{ url('admin/news') }}" class="btn btn-warning"> <i class="fa fa-undo"></i> Back </a>
                        @if(empty($model->status) || $model->status == News::DRAFT)
                        <button type="submit" class="btn btn-info" name="btnsave" value="submit"> <i class="fa fa-save"></i> Save</button>
                        @endif
                        @if(empty($model->status) || $model->status == News::DRAFT || $model->status == News::PUBLISHED)
                        <button type="submit" class="btn btn-success" name="btnpublish" value="submit"> <i class="mdi mdi-publish"></i> Save and Publish</button>
                        @endif
                        @if($model->status == News::PUBLISHED)
                        <button type="submit" class="btn btn-primary" name="btnunpublish" value="submit"> <i class="fa fa-backward"></i> Unpublish</button>
                        @endif
                        @if(!empty($model->status) && $model->status != News::DELETED)
                        <button type="submit" class="btn btn-danger" name="btndelete" value="submit"> <i class="fa fa-remove"></i> Delete</button>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--./row-->
@endsection
@section('script')
    @parent
    <script>
      var editor_config = {
        path_absolute : "{{ url('/') }}/",
        selector: "textarea.my-editor",
        plugins: [
          "advlist autolink lists link image charmap print preview hr anchor pagebreak",
          "searchreplace wordcount visualblocks visualchars code fullscreen",
          "insertdatetime media nonbreaking save table contextmenu directionality",
          "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
          var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
          var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

          var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
          if (type == 'image') {
            cmsURL = cmsURL + "&type=Images";
          } else {
            cmsURL = cmsURL + "&type=Files";
          }

          tinyMCE.activeEditor.windowManager.open({
            file : cmsURL,
            title : 'Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no"
          });
        }
      };

      tinymce.init(editor_config);
</script>
    
@endsection