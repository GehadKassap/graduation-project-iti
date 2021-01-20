<!DOCTYPE html>
<html>

<head>

    <title>Admin|support</title>

    <!--*************Internal style sheet****************-->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/admin/admin-support.css')}}" />


</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">
    <!--start side menue--------------------------------------------------------->
    @include("admin.layouts.sidenav")

    <!----------------------------------------------------------------End Side menu-->


    <!--start main-contenet---------------------------------------------------------->
    <div class="content-wrapper">
        <div class="container-fluid">
            <!--start users support------------------------------------------------------------->
            <div class="col-lg-12">
                <div class="card no-b my-3 shadow2">
                    <div class="card-header white p-3 d-flex justify-content-between ">
                        <h4>Problems</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table  table-hover r-0">
                                <thead style="color: lime;background-color:slategrey;">
                                    <tr>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Contact Information
                                        </th>
                                        <th>
                                            Subject
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            delete
                                        </th>
                                        <th>
                                            Status icon
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($problems as $problem)
                                    <tr>

                                        <td>
                                            <div>
                                                <div>
                                                    <strong>{{$problem['name']}}</strong>
                                                </div>
                                                <span style="color:mediumvioletred;">Problem : </span><small>
                                                    {{$problem['message']}}
                                                </small>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div>
                                                    <strong>{{$problem['email']}}</strong>
                                                </div>
                                                <small>{{$problem['phone']}}

                                                </small>
                                            </div>
                                        </td>
                                        <td>{{$problem['subject']}}</a></td>
                                        <td>{{$problem['state']}}</a></td>

                                        <td>
                                            <form class="btn btn-fab-sm "
                                                action="{{route('problems.destroy',$problem)}}" method="Post">
                                                @csrf
                                                @method("delete")
                                                <button style="background-color: transparent;border: none;"
                                                    type="submit" class="far fa-trash-alt mr-2 btn-outline-danger"
                                                    onMouseOver="style.color='red'"
                                                    onMouseOut="style.color='green'"></button>
                                            </form>
                                        </td>
                                        <td>
                                            <form style="text-align: center;"
                                                action="{{route('problems.update',$problem)}}" method="POST">
                                                @csrf
                                                @method("put")
                                                @if($problem['state']=='solved')
                                                <button type="submit" class="fas fa-check"
                                                    onMouseOver="style.color='red'" onMouseOut="style.color='green'"
                                                    style="background-color: transparent;border: none;color:lightskyblue;"></button>
                                                </a>

                                                @else
                                                <button type="submit" onMouseOver="style.color='red'"
                                                    onMouseOut="style.color='green'" class="far fa-eye"
                                                    style="background-color: transparent;border: none;color:lightskyblue;"></button>
                                                </a>

                                                @endif
                                        </td>
                                        </form>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-------------------------------------------------------------------------end user support-->
        </div>

    </div>
    <!-------------------------------------------------------------------------end main-contenet-->
    <!--start footer------------------------------------------------------------------------------>
    @include("admin.layouts.footer")

    <!--------------------------------------------------------------------------------end footer-->
    </div>

    <!-----------------------------------------------------------end of main main page wrapper----------------------------------------->

</body>

</html>