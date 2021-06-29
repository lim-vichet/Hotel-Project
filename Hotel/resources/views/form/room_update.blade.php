@extends('form.master')
@section('content')
    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-md-8 offset-2" style="background-color: rgba(229,236,225, 0.4); padding: 10px; border-radius: 5px;">
                <form action="{{route('room_edit',$room->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    {{csrf_field()}}
                    <div class="form-cut">
                        <label for="">ID</label>
                        <input type="text" name="id" id="" class="form-control" readonly value="{{$room->id}}">
                        <label for="">Photo</label>
                        <br>
                        <input type="file" name="img" id="">
                        <br><br>
                        <input type="submit" name="" id="" value="Submit" class="btn btn-success">
                        <a href="{{route('rooms')}}" class="btn btn-primary">Go Back</a>
                    </div>
                    <div class="form-cut">
                        <label for="">Room Number</label>
                        <input type="text" name="name" id="" class="form-control" value="{{$room->name}}">
                        <label for="">Price</label>
                        <input type="text" name="price" id="" class="form-control" value="{{$room->price}}">

                    </div>
                    <div class="form-cut2">
                        <label for="">Description</label>
                        <br>
                        <textarea name="description" id="" cols="30" rows="10" style="width: 100%;">{!! $room->description !!}</textarea>
                    </div>
                </form>
                <form method="post" enctype="multipart/form-data" id="frmUploadPic">
                    {{csrf_field()}}
                    <div class="form-cut2">
                        <br>
                        <input type="file" name="txtuploadpic" id="txtuploadpic">
                        <input type="button" value="Save" class="btn btn-primary" id="btnUploadPic">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        //       Tinymce =======================================================================>
        function calleditor(){
            tinymce.init({selector:"textarea",theme: "modern",width: "760",height:"300",relative_urls: false, remove_script_host: false,
                file_browser_callback:function(field_name, url, type, win){
                    var filebrowser = "{{ asset('filebrowser.php') }}";
                    filebrowser += (filebrowser.indexOf("?") < 0) ? "?type=" + type : "&type=" + type;
                    tinymce.activeEditor.windowManager.open({
                        title : "Insert Photo",
                        width : 560,
                        height : 500,
                        url : filebrowser
                    }, {
                        window : win,
                        input : field_name
                    });
                    return false;
                },
                plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table contextmenu directionality",
                    "emoticons template paste textcolor colorpicker textpattern imagetools media code",
                ],
                menubar:true,toolbar1: "undo redo | insert | sizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",
                toolbar2:"fontselect | fontsizeselect | forecolor media code",
            });
        }

        tinyMCE.remove();
        calleditor();
        document.getElementById('btnUploadPic').onmouseup = function () {
            tinyMCE.triggerSave();
            var frm = document.getElementById('frmUploadPic');
            var frmData = new FormData(frm);
            var xhr = new XMLHttpRequest();
            xhr.open('post', '/upload_photo', true);
            xhr.onload = function () {
                var status = JSON.parse(this.responseText);
                if (status.status==1){
                    $("#txtuploadpic").val("");
                }
            };
            xhr.send(frmData);
        }
        //end tinymce =======================================================================>
    </script>
@endsection