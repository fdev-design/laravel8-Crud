<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="container py-4 ">
        <div class="row">
            <div class="col-md-6 ">
                <form method="Post" action="">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp"
                            placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputrollNo">Roll No</label>
                        <input type="text" class="form-control" name="roll_no" id="exampleInputrollNo" placeholder="Roll No">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputmarks">Marks</label>
                        <input type="text" class="form-control" name="marks" id="exampleInputmarks" placeholder="Marks">
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


            <div class="col-md-6 ">
                <table class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Roll No</th>
                        <th>Marks</th>
                        <th>Actions</th>
                    </tr>
             @foreach ($student as $stu)
             <tr>
                <td>{{ $stu->id}}</td>
                <td>{{ $stu->name}}</td>
                <td>{{ $stu->roll_no}}</td>
                <td>{{ $stu->marks}}</td>
                <td>
                    <a href="{{url('/student/edit', $stu->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{url('/student/delete', $stu->id)}}" class="btn btn-danger">Delete</a>
                </td>
               </tr>
             @endforeach
                   
                    </tbody>
                </table>
            </div>
        </div>
    </div>







</x-app-layout>
