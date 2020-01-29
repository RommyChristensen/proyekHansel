<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Preview QR Code</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=DM+Serif+Text&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/fa/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

    <style>
        
    </style>
</head>
<body>
    <button type="button" id="generateAll">Generate</button>
    {{-- <div id="previewImage"></div>

    <br><br> --}}

    <!-- CONTAINER UNDANGAN IMAGES -->
	<div id="containerSS" class='d-flex flex-wrap'>
    </div>

<?php
    // echo "<pre>";
    // print_r($tamu);
    // echo "</pre>";
    $ctr = 0;
    echo "<div id='containerQR' class='d-flex flex-wrap'>";
        foreach($tamu as $key => $value){
        $ctr++;
        if($ctr % 31 == 0){
            echo "</div>";
            echo "<div id='containerQR' class='d-flex flex-wrap'>";
            //$ctr--;
        }else{
            echo "<div class='box' id='box-".$ctr."'>";
            echo "<span class='avenir-next-b' style='color: brown;'>The Wedding of <br> Lorenztino & Sonia</span><br>";
            echo "<span class='avenir-next-m' style='letter-spacing: 2px; color: brown;'>FEB.01.2020</span>";
            echo "<img style='margin: 0 auto; margin-top:8px; margin-bottom: 8px;' src='https://api.qrserver.com/v1/create-qr-code/?data=".$value->id."&amp;size=100x100' alt='' title='' />";
                //echo "<div style='margin: 0 auto; margin-top:8px; margin-bottom: 8px; background-image: url("."'https://api.qrserver.com/v1/create-qr-code/?data=".$value->id."&amp;size=100x100'".")'></div>";
            echo "<br><span class='avenir-next-b' style='color: brown; font-size: 8pt;'>QR CODE DIBAWA UNTUK TANDA MASUK</span>";
            echo "<p class='avenir-next-m' style='margin-bottom: 0; letter-spacing: 2px; margin-top: 5px; font-size: 9pt;background-color: brown; color: white;'>For ".$value->kuota." Person</p>";
            echo "<span class='avenir-next-b' style='color: brown; font-size: 9pt;'>".$value->nama."</span>";
            echo "</div>";
        }
    }
    echo "</div>";
?>
    <script>

        $(document).ready(function(){
            // var element = $("#box-1")[0]; // global variable
            // var getCanvas = document.createElement("canvas"); // global variable
            // $("#generateAll").click(function(){
            //     html2canvas(element, {
            //         onrendered: function (canvas) {
            //                 $("#previewImage").append(canvas);
            //                 getCanvas = canvas;
            //             }
            //         });

            //     var imgageData = getCanvas.toDataURL("image/png");
            //     // Now browser starts downloading it instead of just showing it
            //     var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
            //     $("#generateAll").attr("download", "test.png").attr("href", newData);
            // });

            $("#generateAll").click(function(){
                newGenImage();
                function newGenImage(){
                    var tamus = [];

                    $.ajax({
                            method: "post",
                            url: '/Burger123/getAll',
                            data: {
                                "_token": "{{ csrf_token() }}"
                            },
                            success: function(res){
                                datas = JSON.parse(res);
                                datas.forEach(data => {
                                    tamus.push(data);
                                });

                                //console.log(tamus[0]['nama']);

                                var index = 1;

                            function next()
                            {
                                //console.log("yes");
                                if(index-1 >= tamus.length) return;

                                html2canvas($(`#box-${index}`).get(0), {useCORS : true}).then(canvas => {
                                    // $("#containerSS").append(canvas);
                                    var data = canvas.toDataURL();
                                    
                                    var link = document.createElement('a');
                                    link.download = `card_${tamus[index-1]["nama"]}_${index-1}.png`;
                                    link.href = data;

                                    document.body.appendChild(link);
                                    link.click();
                                    document.body.removeChild(link);
                                    
                                    index++;
                                    //console.log(link);
                                    next();
                                });
                            }

                            next();
                            }
                        });
                }
                // let tamus = [];
                // $.ajax({
                //     method: "post",
                //     url: '/Burger123/getAll',
                //     data: {
                //         "_token": "{{ csrf_token() }}"
                //     },
                //     success: function(res){
                //         datas = JSON.parse(res);
                //         datas.forEach(data => {
                //             tamus.push(data);
                //         });

                //         let id = tamus[0]['id'];
                //         let nama = tamus[0]['nama'];
                //         let kuota = tamus[0]['kuota'];

                //         $.ajax({
                //             url: "/Burger123/generateIndividualQR",
                //             method: "get",
                //             data: {
                //                 "_token": "{{ csrf_token() }}",
                //                 "id": id,
                //                 "nama": nama,
                //                 "kuota": kuota
                //             },
                //             success: function (res) {
                //                 //console.log(res);
                //             }
                //         });
                //     }
                // });
            });
        });
    </script>

</body>
</html>