<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="container py-4 ">
        <div class="row">
            <div class="col-md-6 ">

                <h1>Edit Data !!!</h1>
                <form method="post" action="">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp"
                            placeholder="Enter Name" value="{{$student->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputrollNo">Roll No</label>
                        <input type="text" class="form-control" name="roll_no" id="exampleInputrollNo" value="{{$student->roll_no}}" placeholder="Roll No">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputmarks">Marks</label>
                        <input type="text" class="form-control" name="marks" id="exampleInputmarks" value="{{$student->marks}}" placeholder="Marks">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                    <br/>
                    @if (session()->has('status'))
                     <div class="alert alert-success">
                         {{session()->get('status')}}
                         </div>   
                    @endif
                </form>
            </div>


            
        </div>
    </div>







</x-app-layout>
