@extends('layouts.admin')
@section('mainContent')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 mb-3 order-last">
                <h3>Create Quiz</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/dashboard/quiz/create">Create</a></li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-10 col-12">
            <form action="/dashboard/quiz" method="POST">
                @csrf
            <div class="card">
                <div class="card-content">
                    <div class="card-body mb-3">
                        <div class="form form-vertical">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Title Quiz</label>
                                            <input type="text" id=""
                                                class="form-control mt-3" name="titleQuiz"
                                                placeholder="Title Quiz">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-body mb-3">
                        <div class="form form-vertical">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Description Quiz</label>
                                            <input type="text" id=""
                                                class="form-control mt-3" name="desc"
                                                placeholder="Desc Quiz">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrapper">





            
            </div>
            <div class="col-md-12 ">

                    <div class="justify-content-start col-12">
                    <button type="submit" class="btn btn-outline-primary short_add mx-2 px-2 mb-3">&plus; Short Question</button>
                    <button type="submit" class="btn btn-outline-primary long_add mx-2 px-2 mb-3">&plus; Long Question</button>
                    <button type="submit" class="btn btn-outline-primary single_add mx-2 px-2 mb-3">&plus; Single Question</button>
                    <button type="submit" class="btn btn-outline-primary multiple_add mx-2 px-2 mb-3">&plus; Multiple Question</button>
                    </div>
                    <div class=" justify-content-end col-12">
                    <button type="submit"
                    class="btn btn-danger mx-2 px-2 mb-3">Cancel</button>
                    <button type="submit"
                    class="btn btn-primary mx-2 px-2 mb-3">Save</button>
                    </div>
            </div>

        </form>
        </div>
    </div>
</section>
</div>
@endsection
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
<script>
    //Add Input Fields
    $(document).ready(function() {
        var max_fields = 100; //Maximum allowed input fields 
        var wrapper    = $(".wrapper"); //Input fields wrapper
        var add_short = $(".short_add"); //Add button class or ID
        var add_long = $(".long_add"); //Add button class or ID
        var add_single = $(".single_add"); //Add button class or ID
        var add_multiple = $(".multiple_add"); //Add button class or ID
        var x = 1; //Initial input field is set to 1
        
        //When user click on add input button
        $(add_short).click(function(e){
            e.preventDefault();
            //Check maximum allowed input fields
            if(x < max_fields){ 
                x++; //input field increment
                 //add input field
                $(wrapper).append(' <div class="card"><div class="card-header">Question</div><div class="card-body"><div class="form-group mb-3"><label for="shortQ" class="form-label">Short Question</label><textarea class="form-control" id="shortQ" name="short[]"></textarea> </div></div> <a href=""  class="remove_field btn btn-secondary mt-2">Remove</a></div>');
            }
        });
        $(add_long).click(function(e){
            e.preventDefault();
            //Check maximum allowed input fields
            if(x < max_fields){ 
                x++; //input field increment
                 //add input field
                $(wrapper).append('                <div class="card"><div class="card-header">Question</div><div class="card-body"><div class="form-group mb-3"><label for="longQ" class="form-label">Long Question</label><textarea class="form-control" id="longQ" name="long[]"></textarea></div></div> <a href=""  class="remove_field btn btn-secondary mt-2">Remove</a></div>');
            }
        });
        $(add_single).click(function(e){
            e.preventDefault();
            //Check maximum allowed input fields
            if(x < max_fields){ 
                x++; //input field increment
                 //add input field
                $(wrapper).append('                <div class="card"><div class="card-header">Question</div><div class="card-body"><div class="form-group mb-3"> <label for="singleQ" class="form-label">Single Question</label> <textarea class="form-control" id="singleQ" name="single[]"></textarea> <div class="divider"><div class="divider-text">Choice</div> </div><div class="mb-3"> <label for="" class="form-label">Choice</label><input type="text" class="form-control" placeholder="Choice" name="singleChoice[]"></div><div class="mb-3"><label for="" class="form-label">Choice</label> <input type="text" class="form-control" placeholder="Choice" name="singleChoice[]"> </div> </div></div><a href=""  class="remove_field btn btn-secondary mt-2">Remove</a> </div>');
            }
        });
        $(add_multiple).click(function(e){
            e.preventDefault();
            //Check maximum allowed input fields
            if(x < max_fields){ 
                x++; //input field increment
                 //add input field
                $(wrapper).append('                <div class="card"><div class="card-header">Question</div><div class="card-body"><div class="form-group mb-3"><label for="multiQ" class="form-label">Multiple Question</label><textarea class="form-control" id="multiQ" name="multiple[]"></textarea><div class="divider"><div class="divider-text">Choice</div></div><div class="mb-3"><label for="" class="form-label">Choice</label><input type="text" class="form-control" placeholder="Choice" name="multipleChoice[]"> </div> <div class="mb-3"> <label for="" class="form-label">Choice</label><input type="text" class="form-control" placeholder="Choice" name="multipleChoice[]"></div> <div class="mb-3">  <label for="" class="form-label">Choice</label> <input type="text" class="form-control" placeholder="Choice" name="multipleChoice[]"> </div>  <div class="mb-3"> <label for="" class="form-label">Choice</label>  <input type="text" class="form-control" placeholder="Choice" name="multipleChoice[]">  </div>     </div>  </div><a href=""  class="remove_field btn btn-secondary mt-2">Remove</a>  </div>');
            }
        });
        
        //when user click on remove button
        $(wrapper).on("click",".remove_field", function(e){ 
            e.preventDefault();
            $(this).parent('div').remove(); //remove inout field
            x--; //inout field decrement
        })
    });
    </script>

@endsection