@include('components.header')

<div id="body" class="container">

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item active">List</li>
        <li class="breadcrumb-item active"></li>
    </ol>

    <div class="row">

         <div class="col-12">

            <h2>{{$list_name}}</h2>

            <table class="table table-hover">
                <thead>
                    <tr class="table-active">
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Phone number</th>
                        <th scope="col">Country</th>
                        <th scope="col">Commands</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($results as $res)

                        <tr class="table-light">
                            <th scope="row">{{ $res->first_name }}</th>
                            <td>{{ $res->last_name }}</td>
                            <td>{{ $res->phone_number }}</td>
                            <td>{{ $res->country }}</td>
                            <td> <button class="btn btn-danger"> <span class="fa fa-trash-alt"></span> </button> <a class="btn btn-info" href="#"> <span class="fa fa-edit"></span> </a> <a class="btn btn-success" href="lists/3"> <span class="fa fa-angle-right"></span> </a> </td>
                        </tr>

                    @endforeach

                </tbody>
            </table>
    </div>

    <div class="row">

        <div id="sheet"></div>

    </div>

</div>


@include("components.footer")
