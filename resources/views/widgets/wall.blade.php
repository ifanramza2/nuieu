<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=izlra0ur9hku5erotqqtg22skktgwm9hjxrs593698ytryds"></script> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script>
    tinymce.init({
        selector:'textarea',
        plugins: 'image imagetools link code',
        menubar:false
    });
</script>
<script>
    $(document).ready(function(){
      $('.slider').bxSlider();
    });
</script>

<div class="clearfix"></div>
@if($user->id == Auth::user()->id)
<div class="panel panel-default new-post-box">
    <div class="panel-body">
        <form id="form-new-post">
            <input type="hidden" name="group_id" value="{{ $wall['new_post_group_id'] }}">
<!--            <textarea name="content" placeholder="Share what you think or photos"></textarea>-->
            <div class="image-area">
                <a href="javascript:;" class="image-remove-button" onclick="removePostImage()"><i class="fa fa-times-circle"></i></a>
                <img src="" />
            </div>
            <hr />
            <div class="row">
                <div class="col-xs-3">
                    <button type="button" class="btn btn-default btn-add-image btn-sm" data-toggle="modal" data-target="#postCreation">
<!--                    <button type="button" class="btn btn-default btn-add-image btn-sm" onclick="uploadPostImage()">-->
                        <i class="fa fa-image"></i> Add Creation
                    </button>
                    <input type="file" accept="image/*" class="image-input" name="photo" onchange="previewPostImage(this)" multiple>
                </div>
                
                <div class="col-xs-3">
                    <button type="button" class="btn btn-default btn-add-image btn-sm" data-toggle="modal" data-target="#postText">
                        <i class="fa fa-font" aria-hidden="true"></i> Add Text
                    </button>
                    <input type="file" accept="image/*" class="image-input" name="photo" onchange="previewPostImage(this)" multiple>
                </div>
                @if ($user->role === 'Gallery')
                <div class="col-xs-3">
                    <button type="button" class="btn btn-default btn-add-image btn-sm" data-toggle="modal" data-target="#postEvent">
                        <i class="fas fa-calendar-alt"></i> Add Event
                    </button>
                </div>
                @endif
<!--
                <div class="col-xs-4">
                    <div class="loading-post">
                        <img src="{{ asset('images/rolling.gif') }}" alt="">
                    </div>
                </div>
-->
                <div class="col-xs-3">
                    <button type="button" class="btn btn-primary btn-submit pull-right" onclick="newPost()">
                        Post!
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endif

<div class="slider">
    <div>I am a slide.</div>
    <div>I am another slide.</div>
</div>

<div class="post-list-top-loading">
    <img src="{{ asset('images/rolling.gif') }}" alt="">
</div>
<div class="post-list">

</div>
<div class="post-list-bottom-loading">
    <img src="{{ asset('images/rolling.gif') }}" alt="">
</div>

<div class="modal fade " id="likeListModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Likes</h5>
            </div>

            <div class="user_list">

            </div>
        </div>
    </div>
</div>


<!--Post Text-->
<div class="modal fade" id="postText" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Share what you think</h5>
            </div>

            <div class="modal-body">
                <form id="form-new-post">
                    <div class="form-group">
                        <label>Title:</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label>Body</label>
                        <textarea name="body" class="form-control"></textarea> // {{ $user->bio }} 
                    </div>
                    <div class="form-group">
                            <label>Tags:</label>
                            <input type="text" class="form-control" name="tags">
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="newPost()">Post</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!--Post Creation-->
<div class="modal fade" id="postCreation" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Share your creation</h5>
            </div>
            
            <div class="modal-body">
                <form id="form-new-post">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Creation Material</label>
                                <input type="text" class="form-control" name="creation_material">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label>Creation Media</label>
                                <input type="text" class="form-control" name="creation_media">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Created By</label>
                                <input type="text" class="form-control" name="production_by">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label>Year</label>
                                <input type="text" class="form-control" name="production_year">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tags:</label>
                        <input type="text" class="form-control" name="tags">
                    </div>
                    <div class="form-group">
                        <label>Images:</label>
                        <input type="file" class="form-control input-sm" name="images[]" multiple>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="newPost()">Post</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<!--Post Event-->
<div class="modal fade" id="postEvent" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Share your event</h5>
            </div>

            <div class="modal-body">
                <form id="form-new-post">
                    <div class="form-group">
                        <label>Event Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                            <label>Location</label>
                            <input type="text" class="form-control" name="location">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Start from</label>
                                <input type="text" class="form-control" name="start_date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>End</label>
                                <input type="text" class="form-control" name="end_date">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Images:</label>
                        <input type="file" class="form-control input-sm" name="images[]" multiple>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="newPost()">Post</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
