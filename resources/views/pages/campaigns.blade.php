@include('components.header')

<div id="body" class="container">

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item active">Lists</li>
    </ol>

    <div class="row">

    <table class="table table-hover table-bordered table-stripped ">
            <thead>
                <tr class="table-success">
                    <th scope="col">Name</th>
                    <th scope="col">Date created</th>
                    <th scope="col">Counts</th>
                    <th scope="col">Commands</th>
                </tr>
            </thead>
            <tbody>

                
                <tr>
                    <th scope="row">Beginners</th>
                    <td>Oct, 12 2018 at 19:14</td>
                    <td>55</td>
                    <td> <button class="btn btn-danger"> <span class="fa fa-trash-alt"></span> </button> <a class="btn btn-info" href="#"> <span class="fa fa-edit"></span> </a> <a class="btn btn-success" href="list/3"> <span class="fa fa-angle-right"></span> </a> </td>
                </tr>

                
                <tr>
                    <th scope="row">VIPs - Concerts</th>
                    <td>Apr, 11 2018 at 19:15</td>
                    <td>54</td>
                    <td> <button class="btn btn-danger"> <span class="fa fa-trash-alt"></span> </button> <a class="btn btn-info" href="#"> <span class="fa fa-edit"></span> </a> <a class="btn btn-success" href="list/3"> <span class="fa fa-angle-right"></span> </a> </td>
                </tr>

                
                <tr>
                    <th scope="row">Snow bunnies</th>
                    <td>Apr, 18 2017 at 19:19</td>
                    <td>41</td>
                    <td> <button class="btn btn-danger"> <span class="fa fa-trash-alt"></span> </button> <a class="btn btn-info" href="#"> <span class="fa fa-edit"></span> </a> <a class="btn btn-success" href="list/3"> <span class="fa fa-angle-right"></span> </a> </td>
                </tr>

                
            </tbody>
        </table>

    </div>

    <button id="add_camp"> <i class="fas fa-plus fa-2x"></i> </button>

</div>


@include("components.footer")
