<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="colonna">
            <h3>NOME DELL' AZIENDA</h3>
            @foreach ($trains as $train)
            <div>
                <span>{{$train->Nome_dell_azienda}} </span>
            </div>
                
            @endforeach
        </div>
        <div class="colonna">
            <h3>STAZIONE DI PARTENZA</h3>
            @foreach ($trains as $train)
            <div>
                <span>{{$train->Stazione_di_partenza}} </span>
            </div>
                
            @endforeach
        </div>
        <div class="colonna">
            <h3>STAZIONE DI ARRIVO</h3>
            @foreach ($trains as $train)
            <div>
                <span>{{$train->Stazione_di_arrivo}} </span>
            </div>
                
            @endforeach
        </div>
        <div class="colonna">
            <h3>ORARIO PARTENZA</h3>
            @foreach ($trains as $train)
            <div>
                <span>{{$train->orario_partenza}} </span>
            </div>
                
            @endforeach
        </div>
        <div class="colonna">
            <h3>ORARIO ARRIVO</h3>
            @foreach ($trains as $train)
            <div>
                <span>{{$train->orario_arrivo}} </span>
            </div>
                
            @endforeach
        </div>
    </div>
</body>
</html>

<style>
.container{
        display: flex;
}
.colonna{
    border: solid 1px black;
    padding: 0 5px;
}
</style>