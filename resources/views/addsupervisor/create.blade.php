@extends('layouts.app')

@section('content')
    <body background="/images/check.jpg">
    <div style="width: 100%">

        @include('includes.admin')
        <div class="container" style="float: right; width: 80%; ">

            <div class="row">
                <div class="col-md-8 col-md-offset-1">


                    <h1>Add an supervisor</h1>
                    {!! Form::open(['url' => 'addsupervisor']) !!}
                    <div class="form-group">
                        {!! Form::label('supid', 'Supervisor ID: ') !!}
                        {!! Form::text('supid',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('supname', 'Supervisor Name:') !!}
                        {!! Form::text('supname',null,['class'=>'form-control']) !!}
                    </div>
                    <!--<div class="form-group">
                        {!! Form::label('positiontype', 'Position:') !!}
                        &nbsp&nbsp&nbsp&nbsp&nbsp
                        <input type="radio" name="positiontype" <?php if (isset($positiontype) && $positiontype=="Full-time") echo "checked";?> value="Full-time">Full-time
                        &nbsp
                        <input type="radio" name="positiontype" <?php if (isset($positiontype) && $positiontype=="Part-time") echo "checked";?> value="Part-time">Part-time
                    </div>-->

                  <!--  <div class="form-group">
                        {!! Form::label('experience', 'Experience:') !!}
                        &nbsp&nbsp
                        <input type="radio" name="experience" <?php if (isset($experience) && $experience=="Trained") echo "checked";?> value="Trained">Trained
                        &nbsp&nbsp&nbsp
                        <input type="radio" name="experience" <?php if (isset($experience) && $experience=="Untrained") echo "checked";?> value="Untrained">Untrained
                    </div>-->

                  <!--  <div class="form-group">
                        {!! Form::label('language', 'Language:') !!}
                        &nbsp&nbsp&nbsp
                        <input type="radio" name="language" <?php if (isset($language) && $language=="English") echo "checked";?> value="English">English
                        &nbsp&nbsp&nbsp&nbsp
                        <input type="radio" name="language" <?php if (isset($language) && $language=="Spanish") echo "checked";?> value="Spanish">Spanish
                    </div>-->

                    <div class="form-group">
                        {!! Form::label('position', 'Position:') !!}
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <input type="radio" name="position" <?php if (isset($position) && $position=="Icer") echo "checked";?> value="Icer">Icer
                        &nbsp&nbsp&nbsp
                        <input type="radio" name="position" <?php if (isset($position) && $position=="Labeler") echo "checked";?> value="Labeler">Labeler
                        &nbsp&nbsp&nbsp
                        <input type="radio" name="position" <?php if (isset($position) && $position=="Mezzanine") echo "checked";?> value="Mezzanine">Mezzanine
                        &nbsp&nbsp&nbsp
                        <input type="radio" name="position" <?php if (isset($position) && $position=="Stocker") echo "checked";?> value="Stocker">Stocker
                        &nbsp&nbsp&nbsp
                        <input type="radio" name="position" <?php if (isset($position) && $position=="Runner") echo "checked";?> value="Runner">Runner
                        &nbsp&nbsp&nbsp
                        <input type="radio" name="position" <?php if (isset($position) && $position=="QC") echo "checked";?> value="QC">QC
                        &nbsp&nbsp&nbsp
                        <input type="radio" name="position" <?php if (isset($position) && $position=="Cleaner") echo "checked";?> value="Cleaner">Cleaner
                        &nbsp&nbsp&nbsp
                        <input type="radio" name="position" <?php if (isset($position) && $position=="GiftBox") echo "checked";?> value="GiftBox">Gift Box
                    </div>
                    <!--<div class="form-group">
                        {!! Form::label('rating', 'Rating- Labeler:') !!}
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <input type="radio" name="rating" <?php if (isset($rating) && $rating=="1") echo "checked";?> value="1">1
                        &nbsp&nbsp&nbsp&nbsp
                        <input type="radio" name="rating" <?php if (isset($rating) && $rating=="2") echo "checked";?> value="2">2
                        &nbsp&nbsp&nbsp&nbsp
                        <input type="radio" name="rating" <?php if (isset($rating) && $rating=="3") echo "checked";?> value="3">3
                        &nbsp&nbsp&nbsp&nbsp
                        <input type="radio" name="rating" <?php if (isset($rating) && $rating=="4") echo "checked";?> value="4">4
                        &nbsp&nbsp&nbsp&nbsp
                        <input type="radio" name="rating" <?php if (isset($rating) && $rating=="5") echo "checked";?> value="5">5

                    </div>-->

                    <div class="form-group">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>

@stop