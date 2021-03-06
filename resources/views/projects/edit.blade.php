@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 col-lg-9 pull-left">
            <div class="card">
                <div class="card card-header text-light" style="background-color:#000;">Update project</div>
                <div class="card card-body">
                    <form action="{{ route('projects.update',[$project->id]) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="project-name"  style="background-color:#000; color:#fff; padding:5px;">Name<span class="required">*</span></label>
                            <input placeholder="Enter Name" class="form-control" required id="project-name" name="name" spellcheck="false" value="{{$project->name}}">
                        </div>

                        <div class="form-group">
                            <label for="project-content"  style="background-color:#000; color:#fff; padding:5px;">Description</label>
                            <textarea placeholder="Enter Description" class="form-control" style="resize:vertical;" rows="5"  id="project-content" name="description" spellcheck="false" autosize-target text-left>{{$project->description}}</textarea>
                        </div>

                         <div class="form-group">
                                <label for="task-content" style="background-color:#000; color:#fff; padding:5px;">WEEKS</label>
                                <input type="number" placeholder="Enter Timeframe(Weeks)" class="form-control" style="resize:vertical;"  id="task-content" name="weeks" spellcheck="false" autosize-target text-left>
                            </div>

                        <div class="form_group">
                            <input type="submit" class="btn btn-primary" value="Update"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        

    <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
        <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
                <li><a href="/projects/{{$project->id}}"><b>View Project Details</b></a></li>
            </ol>
        </div>
    </div>

    </div>
</div>
@endsection