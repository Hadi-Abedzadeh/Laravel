@extends('layouts.default.backend')



@section('content')
    <div class="m-portlet m-portlet--full-height m-portlet--fit ">
        <div class="m-portlet__body">
            @include('error')
            @include('flash::message')

            <form action="" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" name="title" class="form-control" id="Title" placeholder="Enter Title">
                </div>

                <div class="form-group">
                    <label for="body">body</label>
                    <textarea class="form-control" name="body" id="body" placeholder="body"></textarea>
                </div>

                <div class="form-group">
                    <label for="Title">Upload image</label>
                    <input type="file" name="imageUrl" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="/assets/ckeditor/ckeditor.js"></script>

@endsection



@section('load_assets')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>

    <script>
        CKEDITOR.replace('body',{
            filebrowserUploadMethod : 'form',
            filebrowserUploadUrl: '/backend/blog/upload-image/?send=1',
            filebrowserImageUploadUrl: '/backend/blog/upload-image/?send=1'

        });
    </script>
@endsection

