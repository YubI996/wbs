@extends('layouts.app')
@section('third_party_stylesheets')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"
    integrity="sha512-VMsZqo0ar06BMtg0tPsdgRADvl0kDHpTbugCBBrL55KmucH6hP9zWdLIWY//OTfMnzz6xWQRxQqsUFefwHuHyg=="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
    crossorigin="anonymous">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <div class="card">
                    <div class="card-header"><i class="fa fa-download" aria-hidden="true"></i>  Total Laporan Masuk</div>
                    <div class="card-body justify-content-start"> {{$totalLaporan}} </div>
                </div>
            </div>
            <div class="col mt-5">
                <div class="card">
                    <div class="card-header"><i class="fa fa-clock" aria-hidden="true"></i>  Rata-rata Durasi Penyelesaian</div>
                    <div class="card-body">{{$avgDone}}</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-calendar" aria-hidden="true"></i>  Laporan Perminggu dari Bulan {{date('F Y')}}
                    </div>
                    <div class="card-body">
                        {{-- <blockquote class="blockquote mb-0"> --}}
                        <div style="width:100%;">
                            {!! $lineChart->render() !!}
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col my-6">
                
                <div class="card">
                    <div class="card-header">
                        Laporan Berdasarkan Jenis Pelanggaran
                    </div>
                    <div class="card-body">
                        <div>
                            {!! $barChart->render() !!}
                        </div>
                    </div>
                </div>   
            </div>
            <div class="col my-6">
                <div class="card">
                    <div class="card-header">
                        Laporan Berdasarkan Status
                    </div>
                    <div class="card-body">
                        <div>
                            {!! $pieChart->render() !!}
                        </div>
                    </div>
                </div> 
            </div>
        </div>
            
        {{-- <canvas id="myChart">
            
        </canvas>
    </div>
    <script>
        
        let myChart = document.getElementById('myChart').getContext('2d');

        // Chart.defaults.global.defaultFontFamily = 'Lato';
        // Chart.defaults.global.defaultFontSize = 18;
        // Chart.defaults.global.defaultFontColor = '#777';

        let statChart = new Chart(myChart, {
            type: 'line', //bar horizontalBar, pie, line, doughnut, radar, polarArea
            data: {
                labels:['Minggu 1', 'Minggu 2', 'Minggu 3','Minggu 4'],
                datasets: [{
                    label: 'Jumlah Laporan',
                    data:[
                        100,
                        120,
                        250,
                        329
                    ],
                    backgroundColor: 'blue',
                    borderWidth:1,
                    borderColor:'#7777',
                    hoverBorderWidth:3,
                    hoverBorderColor:'#0000'
                }],
            },
            options:{
                title:{
                    display:true,
                    text:'Jumlah Laporan Bulan Ini Per Minggu'
                }
            }
        });
    </script> --}}
@endsection