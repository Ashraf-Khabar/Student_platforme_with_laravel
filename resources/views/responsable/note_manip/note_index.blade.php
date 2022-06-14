<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=620c8c37aafe1fc4766350dfc53ccc7d">
    <title>manipulation des note</title>
</head>
<body>

    <div class="show_records">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>code eleve</th>
                    <th>code element de module</th>
                    <th>code module</th>
                    <th>semestre</th>
                    <th>poids</th>
                    <th>note</th>

<div class="col-md-12 search-table-col"><span class="counter pull-right"></span>
    <div style="text-align: center;">
        <div class="main">
            <h1 style="color: red">Notes Informations</h1><br><br>
            <a style="text-decoration: none" class="button-24" role="button" href="{{url('resp_dashboard')}}">back</a>
            <a style="text-decoration: none" class="button-24" role="button" href="{{url('Notes/create')}}">Create</a><br><br>
            <h5>{{session('status')}}</h5>
        </div>
    </div>
    <div class="table-responsive table table-hover table-bordered results">
        <table class="table table-hover table-bordered">
            <thead class="bill-header cs" >
            <tr style="color: #be0a38 ; font-size: 15px" >
                <th>ID</th>
                <th>code eleve</th>
                <th>code element de module</th>
                <th>note</th>
                <th>Opperations</th>
            </tr>
            </thead>
            <tbody>
            <tr class="warning no-result">
                <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
            </tr>
            @foreach ($notes as $item)
                <tr style="color: #decdcd ; background-color: #2c2929">
                    <td>{{$item->id}}</td>
                    <td>{{$item->code_eleve}}</td>
                    <td>{{$item->code_elm_mod}}</td>
                    <td>{{$item->note}}</td>
                    <td>
                        <form action="{{url('Notes/'.$item->id)}}" method="POST">
                            <a href="{{url('Notes/'.$item->id.'/edit')}}" class="btn btn-success" style="margin-left: 5px;" type="submit"><i
                                    class="fa fa-pencil-square-o" style="font-size: 15px;"></i></a>
                            @csrf
                            @method('DELETE')
                            <script>
                                function ConfirmDelete()
                                {
                                    return confirm("Are you sure you want to delete?");
                                }
                            </script>
                            <button Onclick="return ConfirmDelete();" class="btn btn-success" style="margin-left: 5px;background: rgb(218,13,50);" type="submit">
                                <i class="fa fa-close" style="font-size: 20px;"></i></button>
                        </form></td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>

</body>
</html>
