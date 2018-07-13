<!DOCTYPE html>
<html>
<head>
    <title>Add new Post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<form class="form-horizontal" method="GET" action="{{url('save/event')}}">

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="name">Title</label>
            <div class="col-md-4">
                <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="location">Location</label>
            <div class="col-md-4">
                <input id="location" name="location" type="text" placeholder="" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="start_date">Start From</label>
            <div class="col-md-4">
                <input id="start_date" name="start_date" type="text" placeholder="" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="end_date">End date</label>
            <div class="col-md-4">
                <input id="end_date" name="end_date" type="text" placeholder="" class="form-control input-md">
            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="description">Description</label>
            <div class="col-md-4">
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for=""></label>
            <div class="col-md-4">
                <button id="" name="" class="btn btn-success">Save</button>
            </div>
        </div>


</form>

</body>
</html>